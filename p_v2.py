import sys
import json

import mysql.connector
import string,nltk,re
from nltk.tokenize import word_tokenize, sent_tokenize, TreebankWordTokenizer
from nltk.corpus import stopwords, treebank
from nltk.stem import WordNetLemmatizer

supplier_Keyword = ['saudi', 'arabia', 'iraq', 'iran', 'libyas', 'libya','middle','east','russia','russian','canada', 'nigeria', 'quwait', 'norway','u.a.e','uae','kazakhstan','u.k','uk','middle-east']
customer_Keyword = ['china', 'japan', 'india','european','europe','asian','asia','south korea','us ','u.s','germany','netherland','spain','italy','france','cuts','cut']

positive_words_supplier = ['falls','fall','drop','shut','not','clash','clashes','drops']
negative_words_supplier = ['higher','import','export','imports','exports','ports','ship','resuming','boost','flood']

#positive_words_consumer =
#negative_words_consumer = [
stopset = set(stopwords.words('english'))

global headline,content,ID,date
cnx = mysql.connector.connect(host = '127.0.0.1',port = 3306,
                              user = 'root',password = '')

if cnx.is_connected():
    print('connected to MYsql db')
else:
    print("cannot connect to db")
    
dbCur = cnx.cursor()
dbCur1 = cnx.cursor()
dbCur2 = cnx.cursor()
dbCur.execute('Select headline,content from sgtk.news')
result_Set = dbCur.fetchall()
if not result_Set:
    print("No rows available in the table")
else:
    for row in result_Set:
        headline = "%s " % (row[0])
        text = "%s " % (row[1])
        
SQL ="Select id,timestamp from saenergyct.news_raw where title='"+headline+"'"
dbCur2.execute(SQL)
RS = dbCur2.fetchall()
if not RS:
        print('NO ID found')
else:
      for R in RS:
                ID = "%s "%(R[0])
                date = "%s" %(R[1])
                print(ID,date)
                
        
def call_main(headline,text):
     lower_Text(headline,text)
     dbCur1.execute('Delete from sgtk.news')
     dbCur1.close()
     cnx.commit()
     cnx.close()
     print("deleted")

def lower_Text(headline,text):
    headline = headline.lower()
    content = text.lower()
    remove_punctuation(headline,content)

def remove_punctuation(headline,content):
    no_HeadlinePunctuation = ""
    no_ContentPunctuation = ""
    for h in headline:
        if h not in string.punctuation:
            no_HeadlinePunctuation+=h
    headline = no_HeadlinePunctuation
    for c in content:
        if c not in string.punctuation:
            no_ContentPunctuation+=c
    cotent = no_ContentPunctuation
    check_supplier_consumer(headline,content)
    

def check_supplier_consumer(headline,content):
    Headline_token = word_tokenize(headline)
    for H in Headline_token:
        if H in supplier_Keyword:
            supplier_check(headline,content)
    else:
        if Headline_token in customer_Keyword:
            print("consumer")


def supplier_check(headline,content):
    positive = []
    negative = []
    word_In_Headline = word_tokenize(headline)
    word_In_content = word_tokenize(content)
    pos_Headline = [nltk.pos_tag(word_In_Headline)]
    pos_Content = [nltk.pos_tag(word_In_content)]
    #print(pos_Headline, "\n",pos_Content)
    count = 0
    for pH in pos_Headline:
        for singleElement in pH:
            if singleElement[count] in positive_words_supplier: 
                positive.append(singleElement[count])
            else:
                if singleElement[count] in negative_words_supplier:
                    negative.append(singleElement[count])
    count = 0
    for pC in pos_Content:
        for singleElement in pC:
              if singleElement[count] in positive_words_supplier:
                positive.append(singleElement[count])
              else:
                if singleElement[count] in negative_words_supplier:
                  negative.append(singleElement[count])  
        count = count + 1

    for p in positive:
            print(p, ": POSITIVE")
    for n in negative:
            print(n,": NEGATIVE")
    positive = ','.join(positive)
    negative = ','.join(negative)
    if (len(positive) > len(negative)):       
        add_positive=("Insert into saenergyct.news_final(id,title,description,positive,negative,sentiment,rating,timestamp) values(%s,%s,%s,%s,%s,%s,%s,%s)")
        data_positive= (ID,headline,content,positive,negative,"Positive",0,date)
        dbCur.execute(add_positive,data_positive)
        cnx.commit()
        dbCur.close()
        print("NEWS IS POSITIVE ")
       
        
    else:
        if(len(negative) > len(positive)):
            add_negative=("Insert into saenergyct.news_final(id,title,description,positive,negative,sentiment,rating,timestamp) values(%s,%s,%s,%s,%s,%s,%s,%s)")
            data_negative= (ID,headline,content,positive,negative,"Negative",0,date)
            dbCur.execute(add_negative,data_negative)
            cnx.commit()
            dbCur.close()
            print("NEWS IS NEGATIVE")

        
        else:
            if(len(positive) == len(negative)):
                add_neutral=("Insert into saenergyct.news_final(id,title,description,positive,negative,sentiment,rating,timestamp) values(%s,%s,%s,%s,%s,%s,%s,%s)")
                data_neutral=(ID,headline,content,positive,negative,"Neutral",0,date)
                dbCur.execute(add_neutral,data_neutral)
                cnx.commit()
                dbCur.close()
                print("NEWS SEEMS NEUTRAL")
                      
        
    
#def positive_negative_list(headline,content):
    

call_main(headline,text)       


##try:
##    data = json.loads(sys.argv[1])
##except:
##    print("ERROR")
##    sys.exit(1)
##
### Generate some data to send to PHP
##result = {'status': 'Yes!'}
### Send it to stdout (to PHP)
##print(json.dumps(result))

    


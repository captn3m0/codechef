---
{"category_name":"medium","problem_code":"GRUMARS","problem_name":"Gru and his Robbery of Mars","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"panik","problem_tester":null,"date_added":"22-12-2019","tags":{"0":"panik","1":"plit2020","2":"suffix"},"problem_difficulty_level":"Medium","best_tag":"Suffix Trees","editorial_url":"https://discuss.codechef.com/problems/GRUMARS","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRUMARS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Gru has decided to steal Mars - the biggest heist in the universe ever! For this, he requires a shrink gun which is available only in Dr. Zola's lab. So first he decides to steal it by infiltrating his lab.  To do this he needs to hack into his system, but Dr. Zola is quite smart and infiltrating his lab won't be so easy. Gru is at the last step of hacking into his system and suddenly a question occurs, answering which can get him access to the lab. The question is:

You have been initially given an empty String $S$. $Q$ updates will be applied on $S$ and after every update, you need to tell some information about the new string $S$. Each update consists of a single string $P$, and in each update, you need to append this string $P$ in front of $S$. So after each update, $S$ is changed by the equation $S=P+S$ (where $+$ denotes string concatenation). After each update, once $S$ has been updated, you need to tell the number of $distinct$ $substrings$ in $S$. See the sample input/output for more explanation.

Help Gru in conducting the biggest robbery of the universe!

###Input:

- The first line contains $Q$ (number of updates).
- Next i-th of the next $Q$ lines contain a string $P_i$ which needs to appended in front of $S$.

###Output:
For each update, print the number of distinct substrings of $S$, in a new line.

###Constraints 
- $1 \leq Q \leq 10^5$
- $1 \leq |P_i| \leq 10^5$
- $ \sum_{i=1}^{Q} |P_i| \leq 5*10^5$
- $P$ contains only uppercase characters. That is from $A$ to $Z$.
###Sample Input:
	2
	AB
	A
###Sample Output:
	3
	5
###EXPLANATION:
After the first query, $S$=AB, so the distinct substrings are A, B and AB. After the 2nd query, $S$=AAB, and 2 more new distinct substrings are created: AAB, AA. therefore answer is 5 for the second query.  

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
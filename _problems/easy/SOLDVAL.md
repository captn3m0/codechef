---
{"category_name":"easy","problem_code":"SOLDVAL","problem_name":"Empire Business ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aman1108","problem_tester":"","date_added":"11-10-2020","tags":{"0":"aman1108","1":"dynamic","2":"easy","3":"infy20"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/SOLDVAL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SOLDVAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
*“Jesse, you asked me if I was in the meth business, or the money business… Neither. I’m in the empire business.”*

Walter’s sold his stack in Gray Matter Technologies, a company which he deserved half a credit, for peanuts. Now this company is worth a billion dollar company. Walter wants to get it's shares to have his Empire Business back and he founds an opportunity.  

There are $N$ persons having shares $A_1, A_2, A_3, … A_N$ in this company. Walter can buy these shares with their minimum **Sold Values**. 

**Sold Values** of a person's share $ i $ $(1 \leq i \leq N) $ with another person's share $ j $ $ (1 \leq j \leq N) $ is equal to $ A_j+|i-j| $. So, a person's share can have $ N $ possible sold values and Walter has to find minimum sold value among them for each person.
 
Since Walter has to run his meth business also he asks you to find minimum sold value for each person.

###Input:

- First line will contain $T$, number of test cases. Then the testcases follow. 
- The First line of each test case contains a integer $N$.
- The Second line of each test case contains $N$ space integers namely $A_1,A_2,…A_N$.

###Output:
For each test case, output in single line $N$ space integers denoting minimum sold value for each person.

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 2*10^6 $
- $1 \leq A_i \leq 10^9 $

Sum of $N$ over all test cases will not exceed $2*10^6$.
###Sample Input:
	2
	5
	6 5 5 5 2
	5
	1 2 3 4 5
###Sample Output:
	6 5 4 3 2
	1 2 3 4 5
###Explanation
For first case:

- Sold value for index $1$:  $6,6,7,8,6$
- Sold value for index $2$:  $7,5,6,7,5$
- Sold value for index $3$:  $8,6,5,6,4$
- Sold value for index $4$:  $9,7,6,5,3$
- Sold value for index $5$:  $10,8,7,6,2$

Minimum sold value for each index will be $6,5,4,3,2$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
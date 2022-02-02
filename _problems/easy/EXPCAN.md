---
{"category_name":"easy","problem_code":"EXPCAN","problem_name":"Expected Candies","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":null,"date_added":"26-12-2019","tags":{"0":"teja349"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPCAN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There are two friends Alice and Bob. They have a packet of $n$ candies. They want to split the candies between them, and to do so, they kept them all in a single line. The $i^{\text{th}}$ candy in the line has a sweetness value of $a_i$. They decided to take turns in picking the candies. Alice has the first turn. In a person's turn, they either eat the leftmost candy or the rightmost candy with equal probability.

Can you find the expected value of sum of sweetness of the candies eaten by Alice?

Your answer is considered correct if its absolute or relative error doesn't exceed $10^{-6}$ .

###Input:

- The first line will contain $T$, number of testcases. Then the testcases follow. 
- First line of each testcase contains a single integer $n$ denoting the number of candies.
- Second line of each testcase contains  $n$ space separated integers representing $a_1,a_2,a_3,...a_n$ respectively.

###Output:
For each testcase, output the expected value of sum of sweetness of the candies which Alice eats.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq n \leq 10^3$
- $1 \leq a_i \leq 10^6$
- Sum of $n$ across all the tests $\leq 10^3$

###Sample Input:
	2
	2
	1 2
	3
	1 2 3

###Sample Output:
	1.500000000000000
	4.000000000000000
	
###EXPLANATION:
In the first sample, Alice eats either the first or the second candy with equal probability. Hence, expected value is $(1+2)/2 = 1.5$

For the second sample, expected value is $4$. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
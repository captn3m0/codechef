---
{"category_name":"easy","problem_code":"GRUBAN","problem_name":"Gru is Handing Out Bananas","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"guptaishita24","problem_tester":null,"date_added":"21-12-2019","tags":{"0":"factorization","1":"greatest","2":"guptaishita24","3":"plit2020"},"problem_difficulty_level":"Easy","best_tag":"Greatest Common Divisor","editorial_url":"https://discuss.codechef.com/problems/GRUBAN","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRUBAN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Gru wants to distribute $N$ bananas to $K$ minions on his birthday.

Gru does not like to just give everyone the same number of bananas, so instead, he wants to distribute bananas in such a way that each minion gets a $distinct$ amount of bananas. That is, no two minions should get the same number of bananas.

Gru also loves $gcd$. The higher the $gcd$, the happier Gru and the minions get. So help Gru in distributing the bananas in such a way that each Minion gets a distinct amount of bananas and gcd of this distribution is highest possible. Output this maximum gcd. If such a distribution is not possible output $-1$.

Note: You have to distribute $all$ $N$ bananas. 

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase consists of a single line of input, which has two integers: $N, K$. 

###Output:
For each testcase, output in a single line the maximum gcd or -1.

###Constraints 
- $1 \leq T \leq 100$
- $1 \leq N, K \leq 10^9$


###Sample Input:
	1
	6 3

###Sample Output:
	1
	
###EXPLANATION:
The only possible distribution is $[1, 2, 3]$. So the answer is 1.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
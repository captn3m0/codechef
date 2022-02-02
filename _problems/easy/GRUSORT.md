---
{"category_name":"easy","problem_code":"GRUSORT","problem_name":"Is it Sorted or Not, That is the Question","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"panik","problem_tester":null,"date_added":"7-01-2020","tags":{"0":"dynamic","1":"panik","2":"plit2020"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/GRUSORT","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRUSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Gru has come to Minionland to recruit some minions for his next robbery. There are $N$ minions available for recruitment and each minion has a skill value associated with it. These skill values are given in the array $A$. Gru needs to recruit exactly $K$ minions for his next assignment.

Now, Gru will pick the minions one by one in some random order. An already picked minion cannot be picked again. At every step, Gru picks one minion uniformly at random from the minions which haven't been picked yet. These minions have a very special demand for working in complete harmony. While picking the minions, if at any moment, the skill value of the newly recruited minion is less than the skill value of any of the already recruited minions, then the minions won't be working in harmony.

Formally, suppose we have picked $j$ minions so far. Then, if the skill value of the $j^{th}$ picked minion is less than the skill value of the $i^{th}$ picked minion for any  $ i < j $, then the minions won't work in harmony. 

Find the probability that the minions will work in harmony. It can be proved that this probability can be represented as an irreducible fraction $\frac{P}{Q}$. You have to print $P*Q^{−1}$ mod $10^9+7$, where $Q^{−1}$ is the inverse element of $Q$ modulo $10^9+7$.

###Input:

- The first line will contain two integers $N, K$, which denote the total number of minions and the number of minions to be recruited.
- The second line will contain $N$ integers denoting the skill value of the minions. That is, the array $A$.

###Output:
Print the probability in the form of $P*Q^{−1}$ mod $10^9+7$,

###Constraints 
- $1 \leq K \leq N \leq 10^3$
- $1 \leq A[i] \leq 10^6$



###Sample Input:
	3 2
	2 1 2 
###Sample Output:
	666666672
	
###Explanation:
The probability in fractional form is  2/3 as picking the following pair of indices (order matters) will lead to harmonious minions: (1,3) (2,1) (2,3) (3,1). The total possible way of picking indices is 6, and so P/Q=4/6 or 2/3. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
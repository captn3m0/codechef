---
{"category_name":"easy","problem_code":"SUMNCR","problem_name":"Summation over nCr","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"aditya10_","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"aditya10_","1":"aditya10_","2":"easy","3":"implementation","4":"observations","5":"pelt2019"},"time":{"view_start_date":1547476200,"submit_start_date":1547476200,"visible_start_date":1547476200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>"I'm a fan of anything that tries to replace actual human contact." - Sheldon.

After years of hard work, Sheldon was finally able to develop a formula which would diminish the real human contact.  

He found $k$ integers $n_1,n_2...n_k$ . Also he found that if he could minimize the value of $m$ such that  $\sum_{i=1}^k$<sup>$n$<sub>$i$</sub></sup>$C$<sub>$m$<sub>$i$</sub></sub> is even, where $m$ = $\sum_{i=1}^k$$m_i$, he would finish the real human contact.  

Since Sheldon is busy choosing between PS-4 and XBOX-ONE, he want you to help him to calculate the minimum value of $m$. 


###Input:

- The first line of the input contains a single integer $T$ denoting the number of test cases. The 
   description of $T$ test cases follows.
-  The first line of each test case contains a single integer $k$.
-  Next line contains k space separated integers $n_1,n_2...n_k$ .

###Output:

For each test case output the minimum value of m for which $\sum_{i=1}^k$<sup>$n$<sub>$i$</sub></sup>$C$<sub>$m$<sub>$i$</sub></sub> is even, where  $m$=$m_1$+$m_2$+. . . $m_k$   and  $0$ <= $m_i$<= $n_i$ .  If no such answer exists print -1.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq k \leq 1000$
- $1 \leq n_i \leq 10$<sup>$18$</sup>

###Sample Input:
	1
    1
	5


###Sample Output:
	2
	
###EXPLANATION:
 <sup>$5$</sup>$C$<sub>$2$</sub> = 10 which is even and m is minimum.   
---
{"category_name":"hard","problem_code":"CNTL","problem_name":"Counting is life","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"1-04-2018","tags":{"0":"codemelange","1":"combinatorics","2":"hard","3":"kr_abhinav","4":"math"},"editorial_url":"https://discuss.codechef.com/problems/CNTL","time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given a set $S$ of $K$ numbers which is a set of first $K$ powers of $2$ (ie. $1$,$2$,$4$,$8$,...)

Given $N$ you have to construct an Array $A$[$0$, ..., $N-1$]  of length $N$ such that $A[i]$ must belong to $S$ for all $i$, $0$ <= $i$ < $N$.

Find the maximum value of $A[0]$ XOR $A[1]$ XOR ... XOR $A[N-1]$ that you can achieve. Here XOR is bitwise xor operator. Also, tell the number of arrays $A$ that gives this maximum XOR.

Print both the numbers mod $10^9+7$.


###Input:
- First line of Input contains the no of test cases T.
- Each of the next T lines contains two integers: N and K.

###Output:
- For every test case, print two space-separated integers: maximum possible XOR and the no of possible ways respectively, modulo $10^9+7$.

###Constraints 
- $1\leq T \leq 100000$
- $1\leq N \leq 10^9+7$
- $1\leq K \leq 100000$
-  $K \leq N$
- Sum of  $K$ over all testcases $\leq 1000000$
###Sample Input:
1

3 3
###Sample Output:
7 6
	
###Explanation:
Here $S = {1,2,4}$
Then max xor is $1$ xor $2$ xor $4 = 7$
Number of $A = $ all permutation of $[1,2,4] = 6$
Therefore the output would be 7 6.
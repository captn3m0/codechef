---
{"category_name":"easy","problem_code":"LOG_EQN","problem_name":"Logarithmic Equation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":null,"date_added":"19-10-2019","tags":{"0":"cnmp2019","1":"easy","2":"prefix","3":"sahi1422","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/LOG_EQN","time":{"view_start_date":1573313400,"submit_start_date":1573313400,"visible_start_date":1573313400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LOG_EQN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a sequence of $N$ integers $A_1, A_2, ..., A_N$. 

Chef thinks that a triplet of integers $(i,j,k)$ is good if $1 \leq i < j < k \leq N$ and $P$ in the following expression contains an odd number of ones in its binary representation:
 
$P = [ A_i<< (  \lfloor \log_2(A_j) \rfloor + \lfloor \log_2(A_k) \rfloor + 2 ) ] + [A_j << ( \lfloor \log_2(A_k) \rfloor + 1) ] + A_k$

The $<<$ operator is called left shift, $x << y$  is defined as $x \cdot 2^y$.

Help the Chef finding the total number of good triplets modulo $10^9 + 7$.

###Input:

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- The second line of each test case contains $N$ space-separated integers $A_1, A_2, ..., A_N$.

###Output:
For each test case, print a single line containing one integer, the number of good triplets modulo $10^9+7$.

###Constraints:
- $1 \leq T \leq 10^3$
- $1\leq N \leq 10^5$
- $1 \leq A_i \leq 10^9$
- The sum of $N$ over all testcases is less than $10^6$

###Sample Input:
```
1
4
1 1 2 3
```
###Sample Output:
```
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"medium","problem_code":"SUMGCD","problem_name":"GCD Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 6\r\n\r\n18 12 30 35 63\r\n\r\n0 4\r\n\r\n4 5\r\n\r\n1 4\r\n\r\n1 3\r\n\r\n4 1\r\n\r\n3 5","output":"193\r\n\r\n70\r\n\r\n161\r\n\r\n141\r\n\r\n78\r\n\r\n89","explanation":"The decoded queries are respectively $f(1, 5)$; $f(3, 4)$; $f(2, 5)$; $f(3, 5)$; $f(1, 3)$; $f(2, 4)$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"martin53","problem_tester":"","date_added":"14-04-2021","tags":{"0":"cook128","1":"divide","2":"greatest","3":"martin53","4":"medium","5":"sparse"},"problem_difficulty_level":"Medium-Hard","best_tag":"Divide And Conquer","editorial_url":"https://discuss.codechef.com/problems/SUMGCD","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUMGCD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/SUMGCD.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/SUMGCD.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/SUMGCD.pdf) as well.

Chef has an array $a_1,\ldots, a_n$ of $n$ elements. He wants you to answer queries of the following type: 

Compute $f(L, R)$, where $$f(L, R) = \sum_{i = L}^{R} \sum_{j= i}^{R} \gcd(a_i, a_{i+1}, \dots a_j).$$ In other words, we want to compute the sum of the greatest common divisors over all subarrays of some range $[L, R]$. 
Help Chef answer $q$ queries of the described type. 


###Input:

The first line contains two integers $n$ and $q$ - the size of the array and the number of queries.

The second line contains $n$ integers $a_1,\ldots,a_n$.

Each of the following $q$ lines contains two integers $l$, $r$.

The queries are encrypted. Let the answer to the previous query be $x$ (or $0$ if there is none). The query is decrypted as follows: $L=((l+x)\mod n)+1$ and $R=((r+x) \mod n)+1$.

###Output:

Print $q$ integers - the answer to each query modulo $10^9+7$.

###Constraints 

$1 \leq n \le 2\cdot 10^5$

$1 \leq q \le 10^6$

$1 \leq a_{i} \le 10^9$

$0 \leq l, r \le n$

###Sample Input:
5 6

18 12 30 35 63

0 4

4 5

1 4

1 3

4 1

3 5

###Sample Output:
193

70

161

141

78

89
	
###EXPLANATION:
The decoded queries are respectively $f(1, 5)$; $f(3, 4)$; $f(2, 5)$; $f(3, 5)$; $f(1, 3)$; $f(2, 4)$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
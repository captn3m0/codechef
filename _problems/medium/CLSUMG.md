---
{"category_name":"medium","problem_code":"CLSUMG","problem_name":"Sum of Primes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"avijit_agarwal","problem_tester":null,"date_added":"1-04-2018","tags":{"0":"avijit_agarwal","1":"cole2018","2":"fft","3":"medium","4":"sieve"},"editorial_url":"https://discuss.codechef.com/problems/CLSUMG","time":{"view_start_date":1524062940,"submit_start_date":1524062940,"visible_start_date":1524062940,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>  

$f$ is a function such that $f(x)$ equals the number of ways in which $x$ can be expressed as sum of two prime numbers. For example $f(10) = 2$, as 10 can be expressed as sum of two primes in two ways: $ 3 + 7 = 5 + 5 = 10$. More formally, $f(x)$ is the number of pairs $(a, b)$ such that $0\le a \le b < x$ and $a$ and $b$ are prime and $a + b = x$.

Given an integer $N$, find the number of pairs $(a, b)$ such that $0 \le a \le b < N$ and $f(a) + f(b) = f(N)$.

###Input:
- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, a integer $N$. 

###Output:
For each testcase, output in a single line, the required answer.

###Constraints 
- $1 \leq T \leq 5$
- $0 \leq N \leq 10^6$

###Sample Input:
    3
    1
    5
    10

###Sample Output:
    1
    4
    21

###Explanation:
- **Case 1:** $f(0) = f(1) = 0$. So the only way to express $f(1)$ is as $f(0) + f(0)$.
- **Case 2:** $f(0) = f(1) = f(2) = f(3) = 0$, and $f(4) = f(5) = 1$. So $f(5)$ can be expressed as $f(0) + f(4)$, $f(1) + f(4)$, $f(2) + f(4)$ and $f(3) + f(4)$.
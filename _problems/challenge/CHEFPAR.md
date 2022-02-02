---
{"category_name":"challenge","problem_code":"CHEFPAR","problem_name":"Chef and Array (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"2-01-2017","tags":{"0":"april18","1":"challenge","2":"factorization","3":"mgch","4":"mgch","5":"random","6":"simulation"},"editorial_url":"https://discuss.codechef.com/problems/CHEFPAR","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/CHEFPAR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/CHEFPAR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/CHEFPAR.pdf">Vietnamese</a> as well.</h3>

Chef has an integer $K$ and a randomly generated sequence $A_1, A_2, \dots, A_N$. He asks you to choose $N$ non-negative integers $D_1, D_2, \dots, D_N$ such that $D_i \le K$ for each valid $i$ and add $D_i$ to $A_i$ for each valid $i$.

Also, Chef has $M$ primes $P_1, P_2, \dots, P_M$. It is guaranteed that for each valid $i$, $P_i$ is the smallest prime greater than $P_{i-1}$. After all addition operations are performed on the sequence $A$, he finds the product of all elements of $A$ and computes its remainders modulo each prime. Let's denote these remainders by $B_1, B_2, \dots, B_M$. Please help Chef maximise $\frac{1}{M}\sum_{i=1}^M B_i$.   

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The third line contains $M$ space-separated integers $P_1, P_2, \dots, P_M$. 

### Output
Print a single line containing $N$ space-separated integers — the sequence $A_1, A_2, \dots, A_N$ obtained after performing all additions.   

### Constraints
- $1 \le N, M \le 10^4$
- $1 \le K \le 2\cdot10^9$
- $1 \le A_i, P_i \le 2\cdot10^9$ for each valid $i$
- $P_i$ is the smallest prime greater than $P_{i-1}$ for each valid $i$ 

### Example Input
<pre><tt>
4 4 5
1 2 3 4
5 7 11 13
</tt></pre>

### Example Output
<pre><tt>
2 6 6 9
</tt></pre>

### Explanation

We can choose $D = (1, 4, 3, 5)$ — that is, we're adding $1$ to $A_1$, $4$ to $A_2$, $3$ to $A_3$ and $5$ to $A_4$. After these addition operations, $A = (2, 6, 6, 9)$. Let's calculate the sequence $B$. 

- $B_1 = (A_1 \cdot A_2 \cdot A_3 \cdot A_4)\;\%\; P_1 = 3$
- $B_2 = (A_1 \cdot A_2 \cdot A_3 \cdot A_4)\;\%\; P_2 = 4$
- $B_3 = (A_1 \cdot A_2 \cdot A_3 \cdot A_4)\;\%\; P_3 = 10$
- $B_4 = (A_1 \cdot A_2 \cdot A_3 \cdot A_4)\;\%\; P_4 = 11$

The score for this output would be $(B_1 + B_2 + B_3 + B_4) / M = 28 / 4 = 7$.

### Score
Your score for each test file will be the sum of all $B_i$ divided by $M$.    
For the above example, the score you would obtain is $7$.

### Test Generation Process
There are four types of tests and five test files (test cases) of each type. During the contest, the displayed score will account for exactly one test file of each type, i.e. your score reflects your submission's performance on 20% (1/5) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to the sum of your program's scores over all test files.

The pseudocodes used for generating tests of each type are given below. Assume the function <tt>rnd.next(l, r)</tt> generates a random number uniformly in the range $l$ through $r$ (both inclusive) and <tt>nextPrime(x)</tt> finds the smallest prime greater than $x$.

**Type 1:**
<pre><tt>     
INF = 1000000000
N = 100
M = 10000
K = rnd.next(1, 1000000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt></pre>     


**Type 2:**   
<pre><tt>     
INF = 1000000000
N = 1000
M = 1000
K = rnd.next(1, 1000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt></pre>     


**Type 3:**    
<pre><tt>     

INF = 1000000000
N = 1000
M = 1000
K = rnd.next(1, 1000000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt></pre>     


**Type 4:**    
<pre><tt>     
INF = 1000000000
N = 10000
M = 100
K = rnd.next(1, 1000000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt></pre>     

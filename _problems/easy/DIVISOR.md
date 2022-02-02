---
{"category_name":"easy","problem_code":"DIVISOR","problem_name":"Chef and Divisors","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n3\r\n64\r\n30\r\n120\r\n45","output":"2\r\n1\r\n2\r\n1\r\n2","explanation":"**Example case 1:** We cannot divide $N=3$ by any valid $K$ and hence output is $2$ as $N=3$ has exactly two divisors $1$ and $3$.  \r\n\r\n**Example case 2:** $N=64$ can be divided by $8$ twice as $8$ has exactly $4$ divisors ( $1$, $2$, $4$, $8$ )  and hence the resultant value of $N$ will be $1$ and $1$ has only $1$ divisor hence answer is $1$.   \r\n\r\n**Example case 3:** We can divide $N=30$ by $6$, $10$ or $15$ as all three of them have exactly $4$ divisors. In each case resultant value of $N$ will be either $5$, $3$ or $2$. And all three of them has exactly $2$ divisors and they cannot be divided further. Hence the output is $2$.     \r\n\r\n**Example case 4:** One of the optimal ways to divide $N=120$ is divide $120$ by $8$ followed by dividing  by $15$. The resultant value will be $120/8 = 15$ and $15/15 = 1$. The number $1$ has exactly one divisor and hence output is $1$.        \r\nNote that, If we divided $N=120$ by $6$ then we won\u0027t get the optimal answer.       \r\n\r\n**Example case 5:** We can divide $N=45$ by $15$ and resultant value of $N$ will be $3$. The number $3$ has exactly $2$ divisors and hence output is $2$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/t3O60H1PxNk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"9-01-2021","tags":{"0":"medium","1":"number","2":"sieve","3":"smit_adm","4":"start1","5":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/DIVISOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIVISOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START1/bengali/DIVISOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START1/mandarin/DIVISOR.pdf), [Russian](https://www.codechef.com/download/translated/START1/russian/DIVISOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START1/vietnamese/DIVISOR.pdf) as well.

Given an integer N, you can apply a operation on $N$ multiple times(possibly 0).        

Operation is defined as follows:    
- Choose a positive integer $K$ such that $K$ has exactly $4$ divisors and $K$ is a divisor of $N$.    
- Change $N$ to $N/K$.         

Find the minimum number of divisors possible of the resulting number $N$. 

### Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains an integers $N$.

### Output:
For each test case, output a single line containing one integer — the minimum number of divisors possible of the resulting number.

### Constraints 
- $1 \leq T \leq 10^6$
- $1 \leq N \leq 10^6$

### Subtasks
- 100 points : original constraints

### Sample Input:
```
5
3
64
30
120
45
```
###Sample Output:
```
2
1
2
1
2
```	
### EXPLANATION:
**Example case 1:** We cannot divide $N=3$ by any valid $K$ and hence output is $2$ as $N=3$ has exactly two divisors $1$ and $3$.  

**Example case 2:** $N=64$ can be divided by $8$ twice as $8$ has exactly $4$ divisors ( $1$, $2$, $4$, $8$ )  and hence the resultant value of $N$ will be $1$ and $1$ has only $1$ divisor hence answer is $1$.   

**Example case 3:** We can divide $N=30$ by $6$, $10$ or $15$ as all three of them have exactly $4$ divisors. In each case resultant value of $N$ will be either $5$, $3$ or $2$. And all three of them has exactly $2$ divisors and they cannot be divided further. Hence the output is $2$.     

**Example case 4:** One of the optimal ways to divide $N=120$ is divide $120$ by $8$ followed by dividing  by $15$. The resultant value will be $120/8 = 15$ and $15/15 = 1$. The number $1$ has exactly one divisor and hence output is $1$.        
Note that, If we divided $N=120$ by $6$ then we won't get the optimal answer.       

**Example case 5:** We can divide $N=45$ by $15$ and resultant value of $N$ will be $3$. The number $3$ has exactly $2$ divisors and hence output is $2$
 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"medium","problem_code":"CHFDIV","problem_name":"Must Be Divisible","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2\r\n3 1","output":"1\r\n6","explanation":"**Example case 1:** If Chef chooses $A=1$, the sequence he creates is $(1,3)$ and then, $X$ is $3$, and if he chooses $A=2$, the sequence is $(2,4)$ and $X$ is $8$. We can see that the largest integer that divides them both is $1$.\r\n\r\n**Example case 2:** The product of any $3$ consecutive integers is always divisible by $6$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adarshag","problem_tester":null,"date_added":"29-04-2019","tags":{"0":"adarshag","1":"akashbhalotia","2":"cook115","3":"exponentiation","4":"maths","5":"medium","6":"number","7":"observation","8":"pigeonhole","9":"sieve"},"problem_difficulty_level":"Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/CHFDIV","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFDIV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/CHFDIV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/CHFDIV.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/CHFDIV.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/CHFDIV.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/CHFDIV.pdf) as well.

Chef likes sequences of integers and in particular, he likes arithmetic progressions.

There are two integers $N$ and $K$. Chef wants to choose a starting positive integer $A$, create the sequence $(A, A+K, A + 2 \cdot K, \ldots, A + (N-1) \cdot K)$ and compute the product of all elements of this sequence; let's denote this product by $X$. For example, if $N=3$ and $K=2$, then Chef can create the sequence $(4,6,8)$, for which $X=192$.

Find the largest integer that divides $X$ regardless of the value of $A$ that Chef chooses. Since the answer can be large, compute it modulo $1,000,000,007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$.

### Output
For each test case, print a single line containing one integer — the largest number that always divides $X$, modulo $1,000,000,007$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^6$
- $1 \le K \le 10^{18}$

### Example Input
```
2
2 2
3 1
```

### Example Output
```
1
6
```

### Explanation
**Example case 1:** If Chef chooses $A=1$, the sequence he creates is $(1,3)$ and then, $X$ is $3$, and if he chooses $A=2$, the sequence is $(2,4)$ and $X$ is $8$. We can see that the largest integer that divides them both is $1$.

**Example case 2:** The product of any $3$ consecutive integers is always divisible by $6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
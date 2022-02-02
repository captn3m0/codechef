---
{"category_name":"easy","problem_code":"BINADD","problem_name":"Addition","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n100010\r\n0\r\n0\r\n100010\r\n11100\r\n1010","output":"0\r\n1\r\n3","explanation":"**Example case 1:** The initial value of $B$ is $0$, so while-loop is not performed at all.\r\n\r\n**Example case 2:** The initial values of $A$ and $B$ are $0_2 = 0$ and $100010_2 = 34$ respectively. When the while-loop is performed for the first time, we have:\r\n- $U = 34$\r\n- $V = 0$\r\n- $A$ changes to $34$\r\n- $B$ changes to $2 \\cdot 0 = 0$\r\n\r\nThe while-loop terminates immediately afterwards, so it is executed only once.\r\n\r\n**Example case 3:** The initial values of $A$ and $B$ are $11100_2 = 28$ and $1010_2 = 10$ respectively. After the first iteration, their values change to $22$ and $16$ respectively. After the second iteration, they change to $6$ and $32$, and finally, after the third iteration, to $38$ and $0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"4-12-2019","tags":{"0":"alex_2oo8","1":"bignum","2":"binary","3":"dec19","4":"easy","5":"melfice"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BINADD","time":{"view_start_date":1242750905,"submit_start_date":1242750905,"visible_start_date":1242750905,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINADD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/BINADD.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/BINADD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/BINADD.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/BINADD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/BINADD.pdf) as well.

Recently, Chef studied the [binary numeral system](https://en.wikipedia.org/wiki/Binary_number) and noticed that it is extremely simple to perform bitwise operations like [AND](https://en.wikipedia.org/wiki/Bitwise_operation#AND), [XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) or [bit shift](https://en.wikipedia.org/wiki/Bitwise_operation#Bit_shifts) on non-negative integers, while it is much more complicated to perform arithmetic operations (e.g. addition, multiplication or division).

After playing with binary operations for a while, Chef invented an interesting algorithm for addition of two non-negative integers $A$ and $B$:
```
function add(A, B):
    while B is greater than 0:
        U = A XOR B
        V = A AND B
        A = U
        B = V * 2
    return A
```

Now Chef is wondering how fast this algorithm is. Given the initial values of $A$ and $B$ (in binary representation), he needs you to help him compute the number of times the while-loop of the algorithm is repeated.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $A$.
- The second line contains a single string $B$.

### Output
For each test case, print a single line containing one integer ― the number of iterations the algorithm will perform during addition of the given numbers $A$ and $B$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le |A|, |B| \le 10^5$
- $A$ and $B$ contain only characters '0' and '1'
- the sum of $|A| + |B|$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (20 points):** $|A|, |B| \le 30$

**Subtask #2 (30 points):**
- $|A|, |B| \le 500$
- the sum of $|A| + |B|$ over all test cases does not exceed $10^5$

**Subtask #3 (50 points):** original constraints

### Example Input
```
3
100010
0
0
100010
11100
1010
```

### Example Output
```
0
1
3
```
	
### Explanation
**Example case 1:** The initial value of $B$ is $0$, so while-loop is not performed at all.

**Example case 2:** The initial values of $A$ and $B$ are $0_2 = 0$ and $100010_2 = 34$ respectively. When the while-loop is performed for the first time, we have:
- $U = 34$
- $V = 0$
- $A$ changes to $34$
- $B$ changes to $2 \cdot 0 = 0$

The while-loop terminates immediately afterwards, so it is executed only once.

**Example case 3:** The initial values of $A$ and $B$ are $11100_2 = 28$ and $1010_2 = 10$ respectively. After the first iteration, their values change to $22$ and $16$ respectively. After the second iteration, they change to $6$ and $32$, and finally, after the third iteration, to $38$ and $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
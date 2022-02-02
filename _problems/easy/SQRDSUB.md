---
{"category_name":"easy","problem_code":"SQRDSUB","problem_name":"Squared Subsequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2 3\r\n3\r\n2 5 6","output":"2\r\n2","explanation":"**Example case 1:** For the subsequences $[1]$ and $[3]$, their products can be represented as differences of two squared integers: $1 = 1^2-0^2$ and $3 = 2^2-1^2$ respectively.\r\n \r\n**Example case 2:** The two good subsequences are $[5]$ and $[2,5,6]$. Their products can be represented as differences of two squared integers: $5 = 3^2-2^2$ and $2 \\cdot 5 \\cdot 6 = 60 = 8^2-2^2$ respectively.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/eGgcNK4-wX0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackslash_123","problem_tester":"","date_added":"3-01-2020","tags":{"0":"april20","1":"easy","2":"hackslash_123","3":"pointers","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SQRDSUB","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SQRDSUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/SQRDSUB.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/SQRDSUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/SQRDSUB.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/SQRDSUB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/SQRDSUB.pdf) as well.

Let's call a sequence of integers *good* if the product of its elements can be represented as a difference of squares of two integers. More formally, a sequence $S_1, S_2, \ldots, S_K$ is *good* if it is possible to find two integers $p$ and $q$ such that $S_1 \cdot S_2 \cdot \ldots \cdot S_K = p^2 - q^2$.

Chef has a sequence $A_1, A_2, \ldots, A_N$. He wants to find the number of contiguous subsequences of $A$ which are good. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of good contiguous subsequences of $A$.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N \le 10^5$
- $|A_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (20 points):** $N \le 10^3$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
3
1 2 3
3
2 5 6
```

### Example Output
```
2
2
```

### Explanation
**Example case 1:** For the subsequences $[1]$ and $[3]$, their products can be represented as differences of two squared integers: $1 = 1^2-0^2$ and $3 = 2^2-1^2$ respectively.
 
**Example case 2:** The two good subsequences are $[5]$ and $[2,5,6]$. Their products can be represented as differences of two squared integers: $5 = 3^2-2^2$ and $2 \cdot 5 \cdot 6 = 60 = 8^2-2^2$ respectively.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
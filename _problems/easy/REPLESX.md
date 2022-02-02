---
{"category_name":"easy","problem_code":"REPLESX","problem_name":"Replace for X","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 4 3 4\r\n4 9 7 0 8\r\n2 25 1 2\r\n100 20","output":"1\r\n-1","explanation":"**Example case 1:**\r\n\r\n- We can perform one operation in the array. Take the $k$-th smallest integer of the current array (which is $8$ in this case) and replace it with $0$. The array then becomes $[4,9,7,0,0]$ which now makes $4$ as the 3rd smallest number of the array.\r\n\r\n**Example case 2:**\r\n\r\n- It is impossible to make $25$ as the smallest number of the array.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dragonado","problem_tester":"","date_added":"27-09-2020","tags":{"0":"array","1":"dragonado","2":"easy","3":"oct20"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/REPLESX","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=REPLESX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/REPLESX.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/REPLESX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/REPLESX.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/REPLESX.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/REPLESX.pdf) as well.

You are given an array of $N$ integers $ A_1, A_2,\dots,A_N$ and three more integers $X, p,$ and $k$.

 An operation on the array is defined to be: replace the $k$-th smallest integer in the array with any integer you want.

Output the minimum number of operations you must perform on the array (possibly $0$ operations) to make the $p$-th smallest  element of the array equal to $X$. If it is impossible to do so output $-1$.

Note: the $k$-th smallest number in an array is the $k$-th number from the left when the array is sorted in non-decreasing order.

### Input

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four integers $N, X, p, k$ respectively.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output

For each test case, print a single line containing one integer ― the minimum number of operations you must perform to make $X$ the $p$-th smallest element or $-1$ if its impossible to do so.

### Constraints

- $1 \le T \le 100$
- $1\leq p,k\leq N$
- $0\leq X \leq 10^9$
- The sum of $N$ over all test cases does not exceed $4*10^5$
- $0 \le A_i \le 10^9$ for each valid $i$

### Subtasks

**Subtask #1 (10 points):** $N \le 5$

**Subtask #2 (40 points):** The sum of $N$ over all test cases does not exceed $3*10^3$

**Subtask #3 (50 points):** Original constraints

### Example Input

```
2
5 4 3 4
4 9 7 0 8
2 25 1 2
100 20
```

### Example Output

```
1
-1
```

### Explanation

**Example case 1:**

- We can perform one operation in the array. Take the $k$-th smallest integer of the current array (which is $8$ in this case) and replace it with $0$. The array then becomes $[4,9,7,0,0]$ which now makes $4$ as the 3rd smallest number of the array.

**Example case 2:**

- It is impossible to make $25$ as the smallest number of the array.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
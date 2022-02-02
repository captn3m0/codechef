---
{"category_name":"easy","problem_code":"CYCLCSUM","problem_name":"Maximum Subsequence Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n-5 4 1 2","output":"7 7 4 5","explanation":"**Example case 1:**\r\n- After zero insertions, $A = [-5, 4, 1, 2]$. The contiguous subsequence with the maximum sum is $A = [4, 1, 2]$.\r\n- After one insertion, $A = [4, 1, 2, -5]$. The contiguous subsequence with the maximum sum is $A = [4, 1, 2]$.\r\n- After two insertions, $A = [1, 2, -5, 4]$. The contiguous subsequence with the maximum sum is $A = [4]$.\r\n- After three insertions, $A = [2, -5, 4, 1]$. The contiguous subsequence with the maximum sum is $A = [4, 1]$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"reviveddevil","problem_tester":null,"date_added":"3-01-2020","tags":{"0":"akashbhalotia","1":"cook115","2":"easy","3":"maximum","4":"prefix","5":"reviveddevil"},"problem_difficulty_level":"Easy-Medium","best_tag":"Prefix Suffix","editorial_url":"https://discuss.codechef.com/problems/CYCLCSUM","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CYCLCSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/CYCLCSUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/CYCLCSUM.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/CYCLCSUM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/CYCLCSUM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/CYCLCSUM.pdf) as well.

Chef has a machine which he uses to rotate sequences. If he puts a sequence $S_1, S_2, \ldots, S_N$ into the machine, it produces the sequence $S_2, S_3, \ldots, S_N, S_1$, i.e. the first element of the sequence is moved to the end.

Chef is definitely not a newbie ― he knows about trivial things like finding the maximum sum of a contiguous subsequence. Therefore, he now made a difficult problem to challenge himself:

You are given a sequence $A_1, A_2, \ldots, A_N$. For each $k$ ($0 \le k \le N-1$), consider the sequence produced by inserting it into the machine repeatedly $k$ times (i.e. inserting $A$ into the machine and replacing $A$ by the sequence it produces, $k$ times); find the maximum sum of a non empty contiguous subsequence of this sequence.

However, to solve this problem, Chef needs the help of a pro. Solve it for him. 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should denote the largest sum of a non empty contiguous subsequence of the sequence produced by the machine after $i-1$ repeated insertions.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 5 \cdot 10^5$
- $|A_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
1
4
-5 4 1 2
```

### Example Output
```
7 7 4 5
```

### Explanation
**Example case 1:**
- After zero insertions, $A = [-5, 4, 1, 2]$. The contiguous subsequence with the maximum sum is $A = [4, 1, 2]$.
- After one insertion, $A = [4, 1, 2, -5]$. The contiguous subsequence with the maximum sum is $A = [4, 1, 2]$.
- After two insertions, $A = [1, 2, -5, 4]$. The contiguous subsequence with the maximum sum is $A = [4]$.
- After three insertions, $A = [2, -5, 4, 1]$. The contiguous subsequence with the maximum sum is $A = [4, 1]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
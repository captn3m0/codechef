---
{"category_name":"medium","problem_code":"CHEFHALF","problem_name":"Beautiful Subsequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4\r\n1 2 3 4\r\n4\r\n4 2 1 3\r\n4\r\n1 3 2 4","output":"4\r\n4\r\n3","explanation":"**Example case 1:** The good subsequences are $[1, 2]$, $[2, 3]$, $[3, 4]$ and $[1, 2, 3, 4]$.\r\n\r\n**Example case 3:** The good subsequences are $[1, 3]$, $[3, 2]$ and $[2, 4]$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/wm8EFRNBZyI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"16-08-2020","tags":{"0":"ad","1":"cook121","2":"maths","3":"medium","4":"psychik","5":"rishup_nitdgp","6":"rishup_nitdgp"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CHEFHALF","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFHALF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/CHEFHALF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/CHEFHALF.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/CHEFHALF.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/CHEFHALF.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/CHEFHALF.pdf) as well.

Consider a sequence with an even length $2L$. A *left rotation* consists of moving the first element of the sequence to the end. The sequence is *good* if it is possible to perform some number of left rotations (possibly zero) and divide the resulting sequence into two halves (containing the first $L$ and last $L$ elements respectively) such that the smallest value in one half is greater then the largest value in the other half.

You are given a sequence $A_1, A_2, \ldots, A_N$. Find the number of its non-empty contiguous subsequences with even length which is good.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of good contiguous subsequences.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pair-wise distinct
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
3
4
1 2 3 4
4
4 2 1 3
4
1 3 2 4
```

### Example Output
```
4
4
3
```

### Explanation
**Example case 1:** The good subsequences are $[1, 2]$, $[2, 3]$, $[3, 4]$ and $[1, 2, 3, 4]$.

**Example case 3:** The good subsequences are $[1, 3]$, $[3, 2]$ and $[2, 4]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
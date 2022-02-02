---
{"category_name":"easy","problem_code":"MEXSTR","problem_name":"Binary String MEX","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1001011\r\n1111","output":"1100\r\n0","explanation":"**Example case 1:** All integers between $0$ and $11$ inclusive, in binary representation, appear in $S$ as subsequences. However, the binary representation of $12$ (which is \u00221100\u0022) is not a subsequence of $S$.\r\n\r\n**Example case 2:** Since $S$ contains only \u00271\u0027-s, the string \u00220\u0022 is not a subsequence of $S$ and therefore $\\mathrm{MEX}(S) = 0$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Gei5oFy2mxs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"avijeet_420","problem_tester":"","date_added":"13-09-2020","tags":{"0":"april21","1":"avijeet_420","2":"binary","3":"easy"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/MEXSTR","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MEXSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/MEXSTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/MEXSTR.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/MEXSTR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/MEXSTR.pdf) as well.

You are given a binary string $S$. Chef defines $\mathrm{MEX}(S)$ as the smallest non-negative integer such that its binary representation (without leading '0'-s; in particular, the binary representation of $0$ is "0") is not a [subsequence](https://en.wikipedia.org/wiki/Subsequence) of $S$.

Chef is asking you to find $\mathrm{MEX}(S)$. Since this integer could be very large, find its binary representation (without leading '0'-s).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one string: $\mathrm{MEX}(S)$ in binary representation.

### Constraints
- $1 \le T \le 10^5$
- $1 \leq |S| \leq 10^6$
- $S$ contains only characters '0' and '1'
- the sum of $|S|$ over all test cases does not exceed $2 \cdot 10^6$

### Subtasks
**Subtask #1 (20 points):** 
 - $1 \le T \le  2 \cdot 10^3$
- $|S| \leq 10$

**Subtask #2 (20 points):** 
 - $1 \le T \le  10^5$
- $|S| \leq 60$

**Subtask #2 (60 points):**
 - original constraints

### Sample Input
```
2
1001011
1111
```

### Example Output
```
1100
0 
```

### Explanation
**Example case 1:** All integers between $0$ and $11$ inclusive, in binary representation, appear in $S$ as subsequences. However, the binary representation of $12$ (which is "1100") is not a subsequence of $S$.

**Example case 2:** Since $S$ contains only '1'-s, the string "0" is not a subsequence of $S$ and therefore $\mathrm{MEX}(S) = 0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
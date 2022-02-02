---
{"category_name":"easy","problem_code":"ORTHODOX","problem_name":"OR-thodox Distinction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n3\r\n1 2 7\r\n2\r\n1 2\r\n3\r\n6 5 8\r\n5\r\n12 32 45 23 47","output":"NO\r\nYES\r\nYES\r\nNO","explanation":"**Example case 1:** The values of $\\mathrm{OR}(l, r)$ are $1, 2, 7, 3, 7, 7$ (corresponding to the contiguous subsequences $[1], [2], [7], [1,2], [2,7], [1,2,7]$ respectively). We can see that these values are not pairwise distinct.\r\n\r\n**Example case 2:** The values of $\\mathrm{OR}(l, r)$ are $1, 2, 3$ (corresponding to the contiguous subsequences $[1], [2], [1, 2]$ respectively) and they are pairwise distinct.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"9-07-2020","tags":{"0":"bitwise","1":"cook120","2":"easy","3":"rajarshi_basu","4":"sjshohag"},"problem_difficulty_level":"Easy","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/ORTHODOX","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ORTHODOX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/ORTHODOX.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/ORTHODOX.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/ORTHODOX.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/ORTHODOX.pdf) as well.

You are given an integer sequence $A_1, A_2, \ldots, A_N$. For any pair of integers $(l, r)$ such that $1 \le l \le r \le N$, let's define $\mathrm{OR}(l, r)$ as $A_l \lor A_{l+1} \lor \ldots \lor A_r$. Here, $\lor$ is the bitwise OR operator.

In total, there are $\frac{N(N+1)}{2}$ possible pairs $(l, r)$, i.e. $\frac{N(N+1)}{2}$ possible values of $\mathrm{OR}(l, r)$. Determine if all these values are pairwise distinct.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if all values of $\mathrm{OR}(l, r)$ are pairwise distinct or `"NO"` otherwise (without quotes).

### Constraints
- $1 \le T \le 300$
- $1 \le N \le 10^5$
- $0 \le A_i \le 10^{18}$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Example Input
```
4
3
1 2 7
2
1 2
3
6 5 8
5
12 32 45 23 47
```

### Example Output
```
NO
YES
YES
NO
```

### Explanation
**Example case 1:** The values of $\mathrm{OR}(l, r)$ are $1, 2, 7, 3, 7, 7$ (corresponding to the contiguous subsequences $[1], [2], [7], [1,2], [2,7], [1,2,7]$ respectively). We can see that these values are not pairwise distinct.

**Example case 2:** The values of $\mathrm{OR}(l, r)$ are $1, 2, 3$ (corresponding to the contiguous subsequences $[1], [2], [1, 2]$ respectively) and they are pairwise distinct.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
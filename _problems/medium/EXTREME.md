---
{"category_name":"medium","problem_code":"EXTREME","problem_name":"I Hate Symbo-LIS-m","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n5 4 3 2 1\r\n5\r\n5 4 3 1 2","output":"5\r\n2","explanation":"**Example case 1:** We can perform the following operations (the newly inserted elements, which are always equal to the length of the LIS of the previous sequence, are underlined): $[5, 4, 3, 2, 1] \\rightarrow [\\underline{1}, 5, 4, 3, 2, 1] \\rightarrow [1, \\underline{2}, 5, 4, 3, 2, 1] \\rightarrow [1, 2, \\underline{3}, 5, 4, 3, 2, 1] \\rightarrow [1, 2, 3, \\underline{4}, 5, 4, 3, 2, 1]$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"9-07-2020","tags":{"0":"cook120","1":"dynamic","2":"longest","3":"medium","4":"rajarshi_basu","5":"sjshohag"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/EXTREME","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXTREME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/EXTREME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/EXTREME.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/EXTREME.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/EXTREME.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/EXTREME.pdf) as well.

The longest increasing subsequence (LIS) of a sequence $B_1, B_2, \ldots, B_L$ is the longest sequence of valid indices $i_1, i_2, \ldots, i_k$ such that $i_1 \lt i_2 \lt \ldots \lt i_k$ and $B_{i_1} \lt B_{i_2} \lt \ldots \lt B_{i_k}$.

You are given a sequence $A_1, A_2, \ldots, A_N$. You may modify it by performing the following operation zero or more times:
- Let $K$ be the length of the LIS of the current sequence $A$.
- Choose a position in this sequence (possibly the beginning or end of the sequence) and insert a new element $K$ into this sequence at this position.
- This way, the sequence $A$ changes and the next operation is performed on this changed sequence.

For example, if $A = [3, 3, 4]$, then the LIS of $A$ has length $2$, so we can insert $2$ anywhere into $A$, obtaining one of the sequences $[2, 3, 3, 
 4]$, $[3, 2, 3, 4]$, $[3, 3, 2, 4]$ or $[3, 3, 4, 2]$.

Find the maximum length of the LIS of $A$ that can be obtained after performing the given operation a finite number of times.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum possible length of the LIS.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^6$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
2
5
5 4 3 2 1
5
5 4 3 1 2
```

### Example Output
```
5
2
```

### Explanation
**Example case 1:** We can perform the following operations (the newly inserted elements, which are always equal to the length of the LIS of the previous sequence, are underlined): $[5, 4, 3, 2, 1] \rightarrow [\underline{1}, 5, 4, 3, 2, 1] \rightarrow [1, \underline{2}, 5, 4, 3, 2, 1] \rightarrow [1, 2, \underline{3}, 5, 4, 3, 2, 1] \rightarrow [1, 2, 3, \underline{4}, 5, 4, 3, 2, 1]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
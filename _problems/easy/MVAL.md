---
{"category_name":"easy","problem_code":"MVAL","problem_name":"Maximise Subsequence Value","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Uvs0kDjhwkM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":"","date_added":"6-09-2020","tags":{"0":"cook122","1":"easy","2":"rahuldugar","3":"rishup_nitdgp","4":"smartnj","5":"smartnj","6":"two"},"problem_difficulty_level":"Easy","best_tag":"Two Pointers","editorial_url":"https://discuss.codechef.com/problems/MVAL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MVAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/MVAL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/MVAL.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/MVAL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/MVAL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/MVAL.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. You should select a (not necessarily contiguous) subsequence of $A$ and reverse it. In other words, if you select a subsequence $A_{i_1}, A_{i_2}, \ldots, A_{i_K}$ ($1 \le i_1 \lt \ldots \lt i_K \le N$), then for each valid $j$, the $i_j$-th element of the resulting sequence is equal to the $i_{K+1-j}$-th element of the original sequence; all other elements are the same as in the original sequence.

In the resulting sequence, you want to calculate the maximum sum of a contiguous subsequence (possibly an empty sequence, with sum $0$). Find its maximum possible value and a subsequence which you should select in order to obtain this maximum value. If there are multiple solutions, you may find any one of them.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print two lines.
- The first of these lines should contain a single integer ― the maximum possible sum of a contiguous subsequence.
- The second line should contain an integer $K$ followed by a space and $K$ space-separated integers $i_1, i_2, \ldots, i_K$.

### Constraints 
- $1 \le T \le 2,000$
- $2 \le N \le 10^5$
- $|A_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
2
5
-4 2 -4 3 -5
3
-3 -2 -1
```

### Example Output
```
5
2 2 3
0
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
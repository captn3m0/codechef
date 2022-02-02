---
{"category_name":"medium","problem_code":"PLANT","problem_name":"Team Trees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"mrkerim","problem_tester":null,"date_added":"23-11-2019","tags":{"0":"deadwing97","1":"hard","2":"ltime78","3":"mrkerim","4":"strings","5":"suffix","6":"suffix"},"problem_difficulty_level":"Hard","best_tag":"Suffix Array","editorial_url":"https://discuss.codechef.com/problems/PLANT","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PLANT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME78/bengali/PLANT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME78/mandarin/PLANT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME78/russian/PLANT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME78/vietnamese/PLANT.pdf) as well.

You are given a string $S$ with length $N$. You should find two non-intersecting substrings of $S$ such that the second one is a substring of the first one and the product of these substrings' lengths is the maximum possible. More formally, let's denote a contiguous substring $S_l, S_{l+1}, \ldots, S_r$ by $S[l, r]$; you should find integers $l_1$, $r_1$, $l_2$ and $r_2$ which satisfy these four criteria:
- $1 \le l_1 \le r_1 \le N$ and $1 \le l_2 \le r_2 \le N$
- $r_2 \lt l_1$ or $r_1 \lt l_2$
- $S[l_2, r_2]$ is a contiguous substring of $S[l_1, r_1]$
- the product $P = (r_2-l_2+1) \cdot (r_1-l_1+1)$ is maximum possible

Find the maximum value of $P$. It is guaranteed that for the given test data, there is at least one way to choose $l_1, r_1, l_2, r_2$ such that the first three criteria are satisfied, i.e. the answer is well-defined.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
Print a single line containing one integer ― the maximum product $P$.

### Constraints
- $1 \le N \le 2 \cdot 10^6$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (50 points):** $N \le 10^3$

**Subtask #2 (50 points):** original constraints

### Example Input 1
```
5
abaab
```

### Example Output 1
```
6
```

### Explanation
We can choose substrings $S[1, 2]$ and $S[3, 5]$.

### Example Input 2
```
25
atcodercodeforcescodechef
```

### Example Output 2
```
76
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
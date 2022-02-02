---
{"category_name":"school","problem_code":"WAV2","problem_name":"The Wave","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/h2s2pXRgnxM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rogue_raven","problem_tester":"","date_added":"19-06-2021","tags":{"0":"cakewalk","1":"cook130","2":"rogue_raven"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WAV2","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WAV2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/WAV2.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/WAV2.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/WAV2.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/WAV2.pdf) as well.

Chef is stuck in the wavey world of polynomials. You are given all $N$ roots of a polynomial $P(x) = \prod_{i=1}^N (x - a_i)$. The roots are pairwise distinct integers, but they are not given in any particular order.

To help Chef escape, you should answer $Q$ queries (numbered $1$ through $Q$). For each valid $i$, in the $i$-th query, you are given an integer $x_i$ and you have to determine whether $P(x_i)$ is positive, negative or $0$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- $Q$ lines follow. For each valid $i$, the $i$-th of these lines contains a single integer $x_i$ describing the $i$-th query.

### Output
For each query, print a single line containing the string `"POSITIVE"`, `"NEGATIVE"` or `"0"` (without quotes) describing the value of the polynomial for the $i$-th query.

### Constraints
- $1 \le N, Q \le 2 \cdot 10^5$
- $|a_i| \le 10^9$ for each valid $i$
- $a_1, a_2, \ldots, a_N$ are pairwise distinct
- $|x_i| \le 10^9$ for each valid $i$

### Example Input
```
4 6
1 3 5 100
-2
2
4
80
107
5
```

### Example Output
```
POSITIVE
NEGATIVE
POSITIVE
NEGATIVE
POSITIVE
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
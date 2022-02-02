---
{"category_name":"medium","problem_code":"CIRCOLOR","problem_name":"Circle Coloring","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 1 2 3\r\n2 1 2\r\n2 2 3","output":3,"explanation":"There are three possible sequences: $(1, 2, 3)$, $(2, 1, 3)$ and $(3, 1, 2)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/BrDD5gj7ncE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"27-11-2020","tags":{"0":"combinatorics","1":"dynamic","2":"ildar_adm","3":"ltime90","4":"medium","5":"square"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CIRCOLOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CIRCOLOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME90/hindi/CIRCOLOR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME90/bengali/CIRCOLOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME90/mandarin/CIRCOLOR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME90/russian/CIRCOLOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME90/vietnamese/CIRCOLOR.pdf) as well.

You are given $N$ sets of integers $A_1, A_2, \ldots, A_N$. For each valid $i$, let's denote the elements of the set $A_i$ by $\{c_{i,1}, c_{i,2}, \ldots, c_{i,|A_i|}\}$.

Find the number of ways to choose a sequence $(a_1, a_2, \ldots, a_N)$ such that:
- $a_i \in A_i$ for each valid $i$
- $a_i \neq a_{i+1}$ for each valid $i$ and $a_1 \neq a_N$

Since this number may be large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains an integer $|A_i|$ followed by a space and $|A_i|$ space-separated non-negative integers $c_{i,1}, c_{i,2}, \ldots, c_{i,|A_i|}$.

### Output
Print a single line containing one integer ― the number of ways to choose $(a_1, a_2, \ldots, a_N)$, modulo $998,244,353$.

### Constraints 
- $2 \le N \le 200,000$
- $|A_i| \ge 1$ for each valid $i$
- $|A_1| + |A_2| + \ldots + |A_N| \le 200,000$
- $1 \le c_{i,j} \le 200000$ for each valid $i, j$

### Subtasks
**Subtask #1 (20 points):** $N \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
3
3 1 2 3
2 1 2
2 2 3
```

### Example Output
```
3
```

### Explanation
There are three possible sequences: $(1, 2, 3)$, $(2, 1, 3)$ and $(3, 1, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
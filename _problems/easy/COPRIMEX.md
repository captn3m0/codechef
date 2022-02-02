---
{"category_name":"easy","problem_code":"COPRIMEX","problem_name":"Coprime Range","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/GdJiFiCpfdg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"the_hyp0cr1t3","problem_tester":"","date_added":"23-02-2021","tags":{"0":"easy","1":"ltime93","2":"the_hyp0cr1t3"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COPRIMEX","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COPRIMEX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/COPRIMEX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/COPRIMEX.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/COPRIMEX.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/COPRIMEX.pdf) as well.

You are given a range of positive integers $L, L+1, \ldots R$. Find an integer $X$ greater than $1$ which is coprime with all the integers in this range (does not share any common factors greater than $1$ with any of these integers). In addition, $X$ must not exceed $2 \cdot 10^9$.

If there are multiple solutions satisfying these conditions, you may find any one of them. It is guaranteed that for the given constraints, at least one such integer $X$ exists.

For example, if $L = 16$ and $R = 17$, then $X = 9$ is coprime with both $16$ and $17$. However, if $L = 6$ and $R = 12$ instead, then $X = 9$ shares a common factor $3$ with $6$ and $12$ and a common factor $9$ with $9$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer $X$ which satisfies the above conditions.

### Constraints
- $1 \leq T \leq 1,000$
- $2 \leq L \leq R \leq 10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
16 17
16 17
973360 973432
```

### Example Output
```
9
27
79
```
    
### Explanation
**Example case 1:** $X = 9$ does not share any common factors with $16$ and $17$.

**Example case 2:** $X = 27$ does not share any common factors with $16$ and $17$.

**Example case 3:** $X = 79$ does not share any common factors with any of the integers $973360, 973361, \ldots, 973432$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
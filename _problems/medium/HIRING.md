---
{"category_name":"medium","problem_code":"HIRING","problem_name":"Hiring Chefs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2\r\n10\r\n01\r\n11\r\n10","output":7,"explanation":"**Example case 1:** The valid subsequences are $(1)$, $(2)$, $(3)$, $(4)$, $(1,2)$, $(2,4)$ and $(1,2,4)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"joudzouzou","problem_tester":null,"date_added":"21-09-2019","tags":{"0":"cook110","1":"dynamic","2":"easy","3":"joudzouzou","4":"meet","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/HIRING","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HIRING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK110/hindi/HIRING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK110/mandarin/HIRING.pdf), [Russian](https://www.codechef.com/download/translated/COOK110/russian/HIRING.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK110/vietnamese/HIRING.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK110/bengali/HIRING.pdf) as well.

Chef Shahhoud wants to hire new chefs for his restaurant. Shahhoud posted a job offer on Chef Rami's paper "Fast Food Times".

$N$ candidates (numbered $1$ through $N$) have applied for the job. There are $M$ traits that define how good a chef is. You are given $N$ strings $S_1, S_2, \ldots, S_N$ describing the traits of the candidates. Each of these strings has length $M$. For each valid $i$ and $j$, the $j$-th character of $S_i$ is '1' if the $i$-th chef has the $j$-th trait or '0' if this chef does not have this trait.

Shahhoud wants to choose a non-empty subsequence $H$ (not necessarily contiguous) of the sequence $(1, 2, \ldots, N)$ and hire all candidates from $H$. However, the sequence $H$ must satisfy an additional condition: for any two consecutive elements of $H$ (let's denote them by $x$ and $y$), candidates $x$ and $y$ have no common traits, to prevent fights between them.

Now, Shahhoud is wondering: how many such valid subsequences exist? Find this number modulo $1,000,000,007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string $S_i$.

### Output
For each test case, print a single line containing one integer — the number of valid subsequences modulo $1,000,000,007$.

### Constraints 
- $1 \le T \le 100$
- $1 \le M \le 16$
- $1 \le N \le 100,000$
- $|S_i| = M$ for each valid $i$
- $S_1, S_2, \ldots, S_M$ contain only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $500,000$

### Example Input
```
1
4 2
10
01
11
10
```

### Example Output
```
7
```

### Explanation
**Example case 1:** The valid subsequences are $(1)$, $(2)$, $(3)$, $(4)$, $(1,2)$, $(2,4)$ and $(1,2,4)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
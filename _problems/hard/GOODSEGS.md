---
{"category_name":"hard","problem_code":"GOODSEGS","problem_name":"Good Subsequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"6 2\r\n1 4 2 5 3 6","output":2,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":null,"date_added":"25-02-2020","tags":{"0":"divide","1":"gainullinildar","2":"hard","3":"march20","4":"tmwilliamlin"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GOODSEGS","time":{"view_start_date":1112031000,"submit_start_date":1112031000,"visible_start_date":1112031000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GOODSEGS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/GOODSEGS.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/GOODSEGS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/GOODSEGS.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/GOODSEGS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/GOODSEGS.pdf) as well.

You are given a permutation $p_1, p_2, \ldots, p_N$. Let's denote a contiguous subsequence $p_l, p_{l+1}, \ldots, p_r$ in it by $[l, r]$ and call it *interesting* if $\max(p_l, p_{l+1}, \ldots, p_r) - \min(p_l, p_{l+1}, \ldots, p_r) = r - l$.

Next, let's say that two interesting subsequences $[a,b]$ and $[c,d]$ are *nested* if $a \le c \le d \le b$ or $c \le a \le b \le d$, and they are *interleaved* if $\mathrm{max}(a,c) \le \mathrm{min}(b,d)$, but they are not nested. The intersection of two such interleaved subsequences is the subsequence $[\mathrm{max}(a,c), \mathrm{min}(b,d)]$.

You need to find the number of ordered pairs of interesting contiguous subsequences such that they are interleaved and their intersection contains at least $X$ elements. Since this number may be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains two space-separated integers $N$ and $X$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$.

### Output
Print a single line containing one integer ― the number of valid pairs of interesting subsequences modulo $998,244,353$.

### Constraints
- $1 \le X \le N \le 300\,000$
- $1 \le p_i \le N$ for each valid $i$
- $p_1, p_2, \ldots, p_N$ are pairwise distinct.

### Subtasks
**Subtask #1 (10 points):** $N \le 150$

**Subtask #2 (20 points):** $N \le 5,000$

**Subtask #3 (70 points):** original constraints

### Example Input
```
6 2
1 4 2 5 3 6
```

### Example Output
```
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
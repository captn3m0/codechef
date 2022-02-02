---
{"category_name":"easy","problem_code":"SHKSTR","problem_name":"Sheokand and String","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jitendersheora","problem_tester":"mgch","date_added":"19-05-2018","tags":{"0":"easy","1":"jitendersheora","2":"jitendersheora","3":"june18","4":"likecs","5":"offline","6":"tries"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/SHKSTR.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/SHKSTR.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/SHKSTR.pdf" target="_blank">Vietnamese</a> as well.</h3>

Sheokand loves strings. Chef has $N$ strings $S_1, S_2, \dots, S_N$ which he wants to give to Sheokand; however, he doesn't want to give them away for free, so Sheokand must first correctly answer $Q$ queries Chef asks him.

In each query, Chef tells Sheokand an integer $R$ and a string $P$. Consider Chef's strings $S_1$ through $S_R$. Out of these strings, consider all strings such that their longest common prefix with $P$ is maximum possible. Sheokand should find the lexicographically smallest of these strings.

Sheokand is busy with his exams. Can you solve the queries for him?

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains Chef's string $S_i$.
- The next line contains a single integer $Q$.
- The following $Q$ lines describe queries. Each of these lines contains an interger $R$, followed by a space and a string $P$.

### Output
For each query, print a single line containing the string that satisfies the required conditions — the answer to that query.

### Constraints 
- $1 \le N \le 100,000$ 
- $1 \le |S_i| \le 10$ for each valid $i$
- $1 \le Q \le 100,000$
- $1 \le R \le N$
- $1 \le |P| \le 10$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, R \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
4
abcd
abce
abcdex
abcde
3
3 abcy
3 abcde
4 abcde
```

### Example Output
```
abcd
abcdex
abcde
```

### Explanation
**Query 1:** For strings $S_1$ through $S_3$, the longest common prefix is always "abc", but "abcd" is the lexicographically smallest of these three strings.

**Query 2:** For strings $S_1$ through $S_3$, the longest common prefix with maximum length is "abcde" and the only string for which it is the LCP is "abcdex", so this is the answer.

**Query 3:** For strings $S_1$ through $S_4$, the longest common prefix with maximum length is "abcde"; it is the LCP for strings "abcdex" and "abcde", but "abcde" is the lexicographically smaller string, so it is the answer.

---
{"category_name":"easy","problem_code":"HMAPPY1","problem_name":"Appy Loves One","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hmrockstar","problem_tester":null,"date_added":"25-10-2018","tags":{"0":"deque","1":"easy","2":"hmrockstar","3":"nov18","4":"segment","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/HMAPPY1","time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/HMAPPY1.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/HMAPPY1.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/HMAPPY1.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/HMAPPY1.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/HMAPPY1.pdf) as well.

Chef has a sequence $A_1, A_2, \ldots, A_N$; each element of this sequence is either $0$ or $1$. Appy gave him a string $S$ with length $Q$ describing a sequence of queries. There are two types of queries:
- '!': right-shift the sequence $A$, i.e. replace $A$ by another sequence $B_1, B_2, \ldots, B_N$ satisfying $B_{i+1} = A_i$ for each valid $i$ and $B_1 = A_N$
- '?': find the length of the longest contiguous subsequence of $A$ with length $\le K$ such that each element of this subsequence is equal to $1$

Answer all queries of the second type.

### Input
- The first line of the input contains three space-separated integers $N$, $Q$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains a string with length $Q$ describing queries. Each character of this string is either '?', denoting a query of the second type, or '!', denoting a query of the first type.

### Output
For each query of the second type, print a single line containing one integer — the length of the longest required subsequence.

### Constraints 
- $1 \le K \le N \le 10^5$
- $1 \le Q \le 3 \cdot 10^5$
- $0 \le A_i \le 1$ for each valid $i$
- $S$ contains only characters '?' and '!'

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N \le 10^3$
- $1 \le Q \le 3 \cdot 10^3$

**Subtask #2 (70 points):** original constraints 

### Example Input
```
5 5 3
1 1 0 1 1
?!?!?	
```

### Example Output
```
2
3
3
```

### Explanation
- In the first query, there are two longest contiguous subsequences containing only $1$-s: $A_1, A_2$ and $A_4, A_5$. Each has length $2$.
- After the second query, the sequence $A$ is $[1, 1, 1, 0, 1]$.
- In the third query, the longest contiguous subsequence containing only $1$-s is $A_1, A_2, A_3$.
- After the fourth query, $A = [1, 1, 1, 1, 0]$.
- In the fifth query, the longest contiguous subsequence containing only $1$-s is $A_1, A_2, A_3, A_4$ with length $4$. However, we only want subsequences with lengths $\le K$. One of the longest such subsequences is $A_2, A_3, A_4$, with length $3$.

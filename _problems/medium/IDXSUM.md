---
{"category_name":"medium","problem_code":"IDXSUM","problem_name":"Zawad and Index Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n1 1\na\n3 5\nnan","output":"325 0\n555099525 502507217 596119576 22936464","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"solaimanope","problem_tester":null,"date_added":"11-05-2019","tags":{"0":"cook","1":"cook107","2":"solaimanope"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/IDXSUM","time":{"view_start_date":1561314600,"submit_start_date":1561314600,"visible_start_date":1561314600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=IDXSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK107/hindi/IDXSUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK107/mandarin/IDXSUM.pdf), [Russian](https://www.codechef.com/download/translated/COOK107/russian/IDXSUM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK107/vietnamese/IDXSUM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK107/bengali/IDXSUM.pdf) as well.

Zawad is a rare competitive programmer — he takes his studies seriously. One day, while studying in a library, he found a pattern $P$ in a century old book. The pattern is a string of lowercase English letters, with length $M$. Since Zawad is a curious boy, he started experimenting with the pattern.

In one experiment, Zawad considers all $26^N$ strings with length $N$ that contain only lowercase English letters. The strings are numbered $0$ through $26^N - 1$ in lexicographical order. For each valid $i$, let $C_i$ be the length of the longest prefix of $P$ which is also a suffix of the $i$-th of these strings ($0 \le C_i \le M$).

For each integer $k$ between $0$ and $M$ inclusive, let $S_k$ denote the sum of all valid indices $i$ such that $C_i = k$. Zawad wants to know all these sums, but since they could be huge, it is enough to compute them modulo $998,244,353$.

Since Zawad is a bit busy at the library, he is asking for your help. Can you find the sums and earn Zawad's respect?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $M$ and $N$.
- The second line contains a single string $P$ with length $M$.

### Output
For each test case, print a single line containing $M+1$ space-separated integers $S_0, S_1, \ldots, S_M$ — the sums modulo $998,244,353$.

### Constraints
- $1 \le T \le 5$
- $1 \le M \le 10^5$
- $M \le N \le 10^6$
- $P$ contains only lowercase English letters

### Example Input
```
2
1 1
a
3 5
nan
```

### Example Output
```
325 0
555099525 502507217 596119576 22936464
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
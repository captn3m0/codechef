---
{"category_name":"school","problem_code":"HRDSEQ","problem_name":"Hard Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2","output":2,"explanation":"**Example case 1:** The $2$-nd element is $0$. It occurs twice among the first two elements, since the first two elements are both $0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mynk322","problem_tester":null,"date_added":"21-06-2019","tags":{"0":"challenge","1":"implementation","2":"mynk322","3":"nov19","4":"watcher"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HRDSEQ","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HRDSEQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/HRDSEQ.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/HRDSEQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/HRDSEQ.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/HRDSEQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/HRDSEQ.pdf) as well.

Chef decided to write an infinite sequence. Initially, he wrote $0$, and then he started repeating the following process:
- Look at the last element written so far (the $l$-th element if the sequence has length $l$ so far); let's denote it by $x$.
- If $x$ does not occur anywhere earlier in the sequence, the next element in the sequence is $0$.
- Otherwise, look at the previous occurrence of $x$ in the sequence, i.e. the $k$-th element, where $k \lt l$, this element is equal to $x$ and all elements between the $k+1$-th and $l-1$-th are different from $x$. The next element is $l-k$, i.e. the distance between the last two occurrences of $x$.

The resulting sequence is $(0, 0, 1, 0, 2, 0, 2, 2, 1, \ldots)$: the second element is $0$ since $0$ occurs only once in the sequence $(0)$, the third element is $1$ since the distance between the two occurrences of $0$ in the sequence $(0, 0)$ is $1$, the fourth element is $0$ since $1$ occurs only once in the sequence $(0, 0, 1)$, and so on.

Chef has given you a task to perform. Consider the $N$-th element of the sequence (denoted by $x$) and the first $N$ elements of the sequence. Find the number of occurrences of $x$ among these $N$ elements.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$. 

### Output
For each test case, print a single line containing one integer ― the number of occurrences of the $N$-th element.

### Constraints 
- $1 \le T \le 128$
- $1 \le N \le 128$

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 16$

**Subtask #2 (70 points):** $1 \le N \le 128$

### Example Input
```
1
2
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The $2$-nd element is $0$. It occurs twice among the first two elements, since the first two elements are both $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
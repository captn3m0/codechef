---
{"category_name":"easy","problem_code":"GDSUB","problem_name":"Chef and Good Subsequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 3\r\n2 2 3 3 5","output":18,"explanation":"There is $1$ good subsequence with length $0$, $5$ good subsequences with length $1$, $8$ good subsequences with length $2$ and $4$ good subsequences with length $3$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/fVy5UqlxpgU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"namanbansal013","problem_tester":"","date_added":"19-04-2019","tags":{"0":"anand20","1":"dynamic","2":"namanbansal013","3":"observation","4":"sept19"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/GDSUB","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GDSUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/GDSUB.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/GDSUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/GDSUB.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/GDSUB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/GDSUB.pdf) as well.

Chef is given a sequence of prime numbers $A_1, A_2, \ldots, A_N$. This sequence has exactly $2^N$ subsequences. A subsequence of $A$ is *good* if it does not contain any two identical numbers; in particular, the empty sequence is good.

Chef has to find the number of good subsequences which contain at most $K$ numbers. Since he does not know much about subsequences, help him find the answer. This number could be very large, so compute it modulo $1,000,000,007$.

### Input
- The first line of the input contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
Print a single line containing one integer ― the number of good subsequences with size at most $K$, modulo $1,000,000,007$.

### Constraints
- $1 \le K \le N \le 10^5$
- $2 \le A_i \le 8,000$ for each valid $i$

### Subtasks
**Subtask #1 (40 points):** $A_1, A_2, \ldots, A_N$ are pairwise distinct

**Subtask #2 (60 points):** original constraints

### Example Input
```
5 3
2 2 3 3 5
```

### Example Output
```
18
```

### Explanation
There is $1$ good subsequence with length $0$, $5$ good subsequences with length $1$, $8$ good subsequences with length $2$ and $4$ good subsequences with length $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
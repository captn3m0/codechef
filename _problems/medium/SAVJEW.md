---
{"category_name":"medium","problem_code":"SAVJEW","problem_name":"Save Jewels","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 4\r\n1 2 4 3\r\n1 3\r\n3 4\r\n1 2\r\n2 3","output":4,"explanation":"**Example case 1:** Khaled can prevent Ghoda from stealing on day $2$. Then, Ghoda steals the $3$-rd jewel on the $1$-st day and the $2$-nd jewel on the $3$-rd day; he cannot steal anything on the $4$-th day. The remaining jewels are the $1$-st and $4$-th jewel, with values $1$ and $3$ respectively.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"17-09-2019","tags":{"0":"cook110","1":"i_love_islam","2":"medium","3":"observation","4":"queue","5":"segment","6":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/SAVJEW","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SAVJEW","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK110/hindi/SAVJEW.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK110/mandarin/SAVJEW.pdf), [Russian](https://www.codechef.com/download/translated/COOK110/russian/SAVJEW.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK110/vietnamese/SAVJEW.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK110/bengali/SAVJEW.pdf) as well.

It is well-known that if you become rich, you will have a lot of trouble. Coach Khaled is one of the richest men in the world. He has $N$ jewels (numbered $1$ through $N$); for each valid $i$, the $i$-th jewel has value $P_i$. The values of all jewels are pairwise distinct. Unfortunately for Khaled, one of the best thieves in the world, Ghoda, is trying to steal the jewels.

Khaled knows that Ghoda wants to try to steal jewels during $M$ days (numbered $1$ through $M$). For each valid $i$, on the $i$-th day, consider all jewels with numbers between $L_i$ and $R_i$ (inclusive) which Ghoda has not stolen yet. If there is at least one such jewel, Ghoda decides to steal one of these jewels: the most valuable one. Khaled can only choose one day and prevent Ghoda from stealing any jewels on that day; Ghoda can steal jewels on subsequent days in the same way.

Khaled wants to maximise the sum of values of the jewels Ghoda has not stolen during these $M$ days. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line containing one integer — the maximum possible sum of values of Khaled's remaining jewels.

### Constraints
- $1 \le T \le 100$
- $1 \le M \le N \le 10^5$
- $1 \le P_i \le 10^9$ for each valid $i$
- $P_1, P_2, \ldots, P_N$ are pairwise distinct
- $1 \le L_i, R_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
1
4 4
1 2 4 3
1 3
3 4
1 2
2 3
```

### Example Output
```
4
```

### Explanation
**Example case 1:** Khaled can prevent Ghoda from stealing on day $2$. Then, Ghoda steals the $3$-rd jewel on the $1$-st day and the $2$-nd jewel on the $3$-rd day; he cannot steal anything on the $4$-th day. The remaining jewels are the $1$-st and $4$-th jewel, with values $1$ and $3$ respectively.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
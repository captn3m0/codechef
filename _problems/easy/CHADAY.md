---
{"category_name":"easy","problem_code":"CHADAY","problem_name":"The Challenge Day","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 3 4\r\n1 1 3\r\n1 2 -4\r\n4 5 2\r\n1 2\r\n1 3\r\n1 1\r\n2 3","output":"3 0 0 4 4","explanation":"**Example case 1:**\r\n- The first player will select the $3$-rd compo.\r\n- The second and third players will not select any compo.\r\n- The fourth player will select the $1$-st, $2$-nd and $4$-th compos.\r\n- The fifth player will select all the compos.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mhammad1","problem_tester":null,"date_added":"14-11-2019","tags":{"0":"cook112","1":"data","2":"easy","3":"mhammad1","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHADAY","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHADAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/CHADAY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/CHADAY.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/CHADAY.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/CHADAY.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/CHADAY.pdf) as well.

It is the end of 2019 — the 17th of November, the Cooking Challenge day.

There are $N$ players participating in this competition, numbered $1$ through $N$. Initially, the skill level of each player is zero. There are also $M$ challenges (numbered $1$ through $M$). For each valid $i$, the $i$-th challenge has three parameters $L_i$, $R_i$ and $X_i$ with the following meaning: for each player between the $L_i$-th and $R_i$-th inclusive, if this player participates in this challenge, their skill level increases by $X_i$ ($X_i$ does not have to be positive).

The organizers of the Cooking Challenge decided that the contest would be boring if they let the participants participate in the challenges directly, so they decided to use the *compos*.

There are $Q$ compos (numbered $1$ through $Q$). For each valid $i$, the $i$-th compo has two parameters $A_i$ and $B_i$, which means that it includes the challenges $A_i, A_i+1, \ldots, B_i$.

Each participant has to select a subset of the compos (possibly empty or the set of all $Q$ compos) and participate in all challenges those compos include. A participant may not select the same compo twice, but may participate in the same challenge more than once if it is included in multiple chosen compos.

For each player, find the maximum skill level this player can reach if the compos are chosen optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $Q$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $L_i$, $R_i$ and $X_i$.
- $Q$ more lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $A_i$ and $B_i$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should denote the maximum skill level of the $i$-th player.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 100,000$
- $1 \le M \le 1,000$
- $1 \le Q \le 10,000$
- $1 \le L_i \le R_i \le N$ for each valid $i$
- $1 \le A_i \le B_i \le M$ for each valid $i$
- $|X_i| \le 1,000,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $1,000,000$
- the sum of $M$ over all test cases does not exceed $5,000$
- the sum of $Q$ over all test cases does not exceed $50,000$

### Example Input
```
1
5 3 4
1 1 3
1 2 -4
4 5 2
1 2
1 3
1 1
2 3
```

### Example Output
```
3 0 0 4 4
```

### Explanation
**Example case 1:**
- The first player will select the $3$-rd compo.
- The second and third players will not select any compo.
- The fourth player will select the $1$-st, $2$-nd and $4$-th compos.
- The fifth player will select all the compos.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
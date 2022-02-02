---
{"category_name":"easy","problem_code":"WWALK","problem_name":"Weird Walk","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4\r\n1 3 3 4\r\n1 2 4 4\r\n2\r\n2 3\r\n3 2\r\n2\r\n3 3\r\n3 3","output":"5\r\n0\r\n6","explanation":"**Example case 1:**\r\n- Alice and Bob walk side by side during the first second, from $X=0$ to $X=1$.\r\n- Then, Alice starts walking faster than Bob, so they do not walk side by side during second $2$. At the end of second $2$, Alice is at $X=4$, while Bob is at $X=3$.\r\n- During the next second, they again do not walk side by side, but Bob walks faster, so they both end up at $X=7$.\r\n- During the last second, they both walk side by side and the distance they walk is $4$.\r\n- Alice and Bob walk side by side during the $1$-st and $4$-th second and the total weird distance they travel is $1+4=5$.\r\n\r\n**Example case 2:**\r\n- First, Alice walks with speed $2$ and Bob walks with speed $3$, so they do not walk side by side. Alice ends up at $X=2$, while Bob ends up at $X=3$ at the end of the $1$-st second.\r\n- Then, Alice walks with speed $3$ and Bob walks with speed $2$, so they do not walk side by side either.\r\n- Although Alice and Bob both end up at $X=5$ at the end of the $2$-nd second, the weird distance is $0$.\r\n\r\n**Example case 3:** We can see that Alice and Bob always walk together, so the weird distance is $3+3=6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/IWziksdaLmw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":"","date_added":"20-05-2020","tags":{"0":"ltime84","1":"simple","2":"simulation","3":"taran_1407","4":"vivek_1998299"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WWALK","time":{"view_start_date":1590858002,"submit_start_date":1590858002,"visible_start_date":1590858002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WWALK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME84/hindi/WWALK.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME84/bengali/WWALK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME84/mandarin/WWALK.pdf), [Russian](https://www.codechef.com/download/translated/LTIME84/russian/WWALK.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME84/vietnamese/WWALK.pdf) as well.

Alice and Bob are walking on an infinite straight street. Initially, both are at the position $X=0$ and they start walking in the direction of increasing $X$. After $N$ seconds, they stop. Let's denote Alice's speed and Bob's speed during the $i$-th of these seconds by $A_i$ and $B_i$ respectively.

Sometimes, Alice and Bob walk together, i.e. with the same speed side by side. Let's define the *weird distance* as the total distance they walk this way. Find this weird distance.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing one integer ― the total weird distance. It can be proved that this distance is an integer.

### Constraints
- $1 \le T \le 20$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^5$ for each valid $i$
- $1 \le B_i \le 10^5$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
4
1 3 3 4
1 2 4 4
2
2 3
3 2
2
3 3
3 3
```

### Example Output
```
5
0
6
```

### Explanation
**Example case 1:**
- Alice and Bob walk side by side during the first second, from $X=0$ to $X=1$.
- Then, Alice starts walking faster than Bob, so they do not walk side by side during second $2$. At the end of second $2$, Alice is at $X=4$, while Bob is at $X=3$.
- During the next second, they again do not walk side by side, but Bob walks faster, so they both end up at $X=7$.
- During the last second, they both walk side by side and the distance they walk is $4$.
- Alice and Bob walk side by side during the $1$-st and $4$-th second and the total weird distance they travel is $1+4=5$.

**Example case 2:**
- First, Alice walks with speed $2$ and Bob walks with speed $3$, so they do not walk side by side. Alice ends up at $X=2$, while Bob ends up at $X=3$ at the end of the $1$-st second.
- Then, Alice walks with speed $3$ and Bob walks with speed $2$, so they do not walk side by side either.
- Although Alice and Bob both end up at $X=5$ at the end of the $2$-nd second, the weird distance is $0$.

**Example case 3:** We can see that Alice and Bob always walk together, so the weird distance is $3+3=6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
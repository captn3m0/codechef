---
{"category_name":"school","problem_code":"CHEFNWRK","problem_name":"Chef and Work","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n1 1 \r\n2\r\n2 4\r\n1 1\r\n3 6\r\n3 4 2\r\n3 6\r\n3 4 3","output":"-1\r\n1\r\n2\r\n3","explanation":"**Example case 1:** Since the weight of the box higher than $K$, Chef can not carry that box home in any number of the round trip.\r\n\r\n**Example case 2:** Since the sum of weights of both boxes is less than $K$, Chef can carry them home in one round trip.\r\n\r\n**Example case 3:** In the first round trip, Chef can only pick up the box at position $1$. In the second round trip, he can pick up both remaining boxes at positions $2$ and $3$.\r\n\r\n**Example case 4:** Chef can only carry one box at a time, so three round trips are required.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/tg0cDl__2-8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"15-08-2020","tags":{"0":"ad","1":"cakewalk","2":"cook121","3":"greedy","4":"psychik","5":"rishup_nitdgp","6":"rishup_nitdgp"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CHEFNWRK","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFNWRK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/CHEFNWRK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/CHEFNWRK.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/CHEFNWRK.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/CHEFNWRK.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/CHEFNWRK.pdf) as well.

Chef has $N$ small boxes arranged on a line from $1$ to $N$. For each valid $i$, the weight of the $i$-th box is $W_i$. Chef wants to bring them to his home, which is at the position $0$. He can hold any number of boxes at the same time; however, the total weight of the boxes he's holding must not exceed K at any time, and he can only pick the ith box if all the boxes between Chef's home and the ith box have been either moved or picked up in this trip.

Therefore, Chef will pick up boxes and carry them home in one or more round trips. Find the smallest number of round trips he needs or determine that he cannot bring all boxes home.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $W_1, W_2, \ldots, W_N$.

### Output
For each test case, print a single line containing one integer ― the smallest number of round trips or $-1$ if it is impossible for Chef to bring all boxes home.

### Constraints
- $1 \le T \le 100$
- $1 \le N, K \le 10^3$
- $1 \le W_i \le 10^3$ for each valid $i$

### Example Input
```
4
1 1 
2
2 4
1 1
3 6
3 4 2
3 6
3 4 3
```

### Example Output
```
-1
1
2
3
```

### Explanation
**Example case 1:** Since the weight of the box higher than $K$, Chef can not carry that box home in any number of the round trip.

**Example case 2:** Since the sum of weights of both boxes is less than $K$, Chef can carry them home in one round trip.

**Example case 3:** In the first round trip, Chef can only pick up the box at position $1$. In the second round trip, he can pick up both remaining boxes at positions $2$ and $3$.

**Example case 4:** Chef can only carry one box at a time, so three round trips are required.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"school","problem_code":"MSNSADM1","problem_name":"Football","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n40 30 50\r\n2 4 20\r\n1\r\n0\r\n10","output":"800\r\n0","explanation":"**Example case 1:** The first player gets $800$ points for scoring goals and has $20$ points deducted for fouls. Likewise, the second player gets $560$ points and the third player gets $800$ points. The third player is the one with the maximum number of points.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/kBJVgYBmgnQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"leoshovo","problem_tester":"","date_added":"30-06-2019","tags":{"0":"array","1":"aug19","2":"cakewalk","3":"leoshovo","4":"looping","5":"vijju123"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MSNSADM1","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MSNSADM1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/MSNSADM1.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/MSNSADM1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/MSNSADM1.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/MSNSADM1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/MSNSADM1.pdf) as well.

A football competition has just finished. The players have been given points for scoring goals and points for committing fouls. Now, it is up to Alex to find the best player in the tournament. As a programmer, your job is to help Alex by telling him the highest number of points achieved by some player.

You are given two sequences $A_1, A_2, \ldots, A_N$ and $B_1, B_2, \ldots, B_N$. For each valid $i$, player $i$ scored $A_i$ goals and committed $B_i$ fouls. For each goal, the player that scored it gets $20$ points, and for each foul, $10$ points are deducted from the player that committed it. However, if the resulting number of points of some player is negative, this player will be considered to have $0$ points instead.

You need to calculate the total number of points gained by each player and tell Alex the maximum of these values.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing one integer ― the maximum number of points.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 150$
- $0 \le A_i \le 50$ for each valid $i$
- $0 \le B_i \le 50$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 2$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3
40 30 50
2 4 20
1
0
10
```

### Example Output
```
800
0
```

### Explanation
**Example case 1:** The first player gets $800$ points for scoring goals and has $20$ points deducted for fouls. Likewise, the second player gets $560$ points and the third player gets $800$ points. The third player is the one with the maximum number of points.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
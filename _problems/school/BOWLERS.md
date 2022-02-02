---
{"category_name":"school","problem_code":"BOWLERS","problem_name":"Bowling Strategy","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/KIwEvwg5pTs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":"","date_added":"10-09-2020","tags":{"0":"cakewalk","1":"cook122","2":"rahuldugar","3":"rishup_nitdgp","4":"smartnj","5":"smartnj"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BOWLERS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOWLERS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/BOWLERS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/BOWLERS.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/BOWLERS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/BOWLERS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/BOWLERS.pdf) as well.

In a cricket game, an *over* is a set of six valid deliveries of balls performed by one player ― the *bowler* for this over.

Consider a cricket game with a series of $N$ overs (numbered $1$ through $N$) played by $K$ players (numbered $1$ through $K$). Each player may be the bowler for at most $L$ overs in total, but the same player may not be the bowler for any two consecutive overs. Assign exactly one bowler to each over in such a way that these rules are satisfied or determine that no such assignment exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $K$ and $L$. 

### Output
For each test case:
- If there is no valid assignment of bowlers to overs, print a single line containing the integer $-1$.
- Otherwise, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of the player assigned as the bowler for the $i$-th over.

### Constraints 
- $1 \le T \le 30$
- $1 \le N, K, L \le 10,000$

### Example Input
```
2
4 3 2
5 4 1
```

### Example Output
```
1 2 3 2
-1
```

### Explanation
**Example case 1:** The following is a valid assignment:
- Bowler 1 bowls the $1$-st over.
- Bowler 2 bowls the $2$-nd and $4$-th overs.
- Bowler 3 bowls the $3$-rd over.

It is valid since no bowler bowls more than $2$ overs and each two consecutive overs have different bowlers.

**Example case 2:** There is no valid assignment in which each of $4$ players bowls at most $1$ over out of $5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
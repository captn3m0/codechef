---
{"category_name":"medium","problem_code":"COWSHEDS","problem_name":"Kuroni and the Cowsheds","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"rhymastic","problem_tester":null,"date_added":"25-06-2020","tags":{"0":"disjoint","1":"hashing","2":"ltime85","3":"medium","4":"rhymastic","5":"small","6":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Disjoint Set Union","editorial_url":"https://discuss.codechef.com/problems/COWSHEDS","time":{"view_start_date":1593277202,"submit_start_date":1593277202,"visible_start_date":1593277202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COWSHEDS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME85/hindi/COWSHEDS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME85/bengali/COWSHEDS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME85/mandarin/COWSHEDS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME85/russian/COWSHEDS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME85/vietnamese/COWSHEDS.pdf) as well.

Kuroni is not only a great programmer, but also a successful farmer. He has already built $N$ cowsheds for his cows (numbered $1$ through $N$) and equipped them with air conditioners, refrigerators, etc. Despite these facilities and high quality food, the cows do not seem to be happy. Through research, Kuroni figured out that cows also need the Internet to communicate and chit-chat with each other. 

Kuroni decided to build a LAN system of connections between his cowsheds. Initially, no connections between the cowsheds exist. Then, for $Q$ days (numbered $1$ through $Q$), Kuroni adds some direct connections without removing any previously added connections. For each valid $i$, on the $i$-th day, Kuroni adds direct bidirectional connections between pairs of cowsheds $(L_i, R_i), (L_i + 1, R_i - 1), \ldots, (R_i, L_i)$, i.e. $(L_i + k, R_i - k)$ for each $0 \le k \le R_i - L_i$. (There may be multiple connections between some pairs of cowsheds. A cowshed may also be connected with itself.)

Two cowsheds are in the same *group* if they can communicate with each other either directly or indirectly ― through connections with some other cowsheds. At the end of each day, tell Kuroni the number of groups of cowsheds that currently exist.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- $Q$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
Print $Q$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer ― the number of groups at the end of the $i$-th day.

### Constraints
- $2 \le N \le 2 \cdot 10^5$
- $1 \le Q \le 5 \cdot 10^5$
- $1 \le L_i \le R_i \le N$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):** $N, Q \le 5,000$

**Subtask #2 (50 points):** original constraints

### Example Input 1
```
5 3
3 5
4 5
2 3
```

### Example Output 1
```
4
3
2
```

### Example Input 2
```
7 3
3 5
3 7
1 7
```

### Example Output 2
```
6
4
2
```

### Explanation
**Example case 1:** On the first, second and third day, one connection between cowsheds $(3, 5)$, $(4, 5)$ and $(2, 3)$ is added, respectively.

**Example case 2:**
- On the first day, only one connection between cowsheds $(3, 5)$ is added, so the number of group is $6$.
- On the second day, connections between pairs of cowsheds $(3, 7)$ and $(4, 6)$ are added, so we now have four groups $\{1\}$, $\{2\}$, $\{3, 5, 7\}$ and $\{4, 6\}$.
- On the third day, connections between pairs of cowsheds $(1, 7)$, $(2, 6)$ and $(3, 5)$ are added, so at the end, there are only two groups $\{1, 3, 5, 7\}$ and $\{2, 4, 6\}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
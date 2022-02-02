---
{"category_name":"school","problem_code":"CHEFWARS","problem_name":"Chef Wars - Return of the Jedi","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n10 4\r\n10 8","output":"0\r\n1","explanation":"**Example case 1:** Chef attacks with power $4$, Darth\u0027s health becomes $6$. Chef attacks with power $2$, Darth\u0027s health becomes $4$. Chef attacks with power $1$ and Darth\u0027s health becomes $3$, but Chef\u0027s attack power becomes $0$.\r\n\r\n**Example case 2:** Chef attacks with power $8$, Darth\u0027s health becomes $2$. Chef attacks with power $4$, Darth\u0027s health becomes $0$. Chef kills Darth.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/luV0moXdX1Q","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"20-07-2020","tags":{"0":"aryanag_adm","1":"aryanag_adm","2":"aug20","3":"cakewalk","4":"daniel_1999","5":"rishup_nitdgp"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFWARS","time":{"view_start_date":1597656600,"submit_start_date":1597656600,"visible_start_date":1597656600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFWARS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/CHEFWARS.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/CHEFWARS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/CHEFWARS.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/CHEFWARS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/CHEFWARS.pdf) as well.

On the ice planet Hoth, Chef has run into his arch-nemesis, DarthForces. Darth has a peculiar fighting style ― he does not attack, but simply defends and lets his opponent tire himself out.

Chef has a lightsaber which has an *attack power* denoted by $P$. He keeps hitting Darth with the lightsaber. Every time he hits, Darth's health decreases by the current attack power of the lightsaber (by $P$ points), and afterwards, $P$ decreases to $\left\lfloor \frac{P}{2} \right\rfloor$.

If the attack power becomes $0$ before Darth's health becomes $0$ or less, Chef dies. Otherwise, Darth dies. You are given Darth's initial health $H$ and the initial attack power $P$. Tell Chef if he can beat Darth or if he should escape.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $H$ and $P$.

### Output
For each test case, print a single line containing the integer $1$ if Chef can beat Darth or $0$ otherwise.

### Constraints
- $1 \le T \le 10^5$
- $1 \le P \le 10^5$
- $1 \le H \le 10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
10 4
10 8
```

### Example Output
```
0
1
```

### Explanation
**Example case 1:** Chef attacks with power $4$, Darth's health becomes $6$. Chef attacks with power $2$, Darth's health becomes $4$. Chef attacks with power $1$ and Darth's health becomes $3$, but Chef's attack power becomes $0$.

**Example case 2:** Chef attacks with power $8$, Darth's health becomes $2$. Chef attacks with power $4$, Darth's health becomes $0$. Chef kills Darth.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
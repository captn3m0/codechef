---
{"category_name":"medium","problem_code":"MAT","problem_name":"MathBuzz","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"viv007","problem_tester":"iscsi","date_added":"1-06-2021","tags":{"0":"expected","1":"june21","2":"medium","3":"number","4":"viv007"},"problem_difficulty_level":"Medium","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/MAT","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/MAT.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/MAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/MAT.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/MAT.pdf) as well. 

There is an inter-city math competition among $k$ various prestigious top schools in the city. Some subset of schools will be selected to compete, where the $i$-th school is selected with probability $p_i\pmod{998\ 244\ 353}$. The schools are all selected independently from each other. It's even possible that the number of selected schools will be $0$ or $1$, because the contest organizers are not very good mathematicians themselves.

Once the schools have been selected, each selected school must choose $r$ of its students to form a team. The $i$-th school has $a_i$ students in total it can choose from. Given a selection of the schools, you are interested in the number of ways teams can be formed. Two ways are considered different if there is at least one school that chose different sets of students for its team.

If the subset of schools is chosen according to the above process, find the expected **number of ways** they can form teams.

###Input

- The first line contains an integer $r$.
- The second line contains an integer $k$.
- The third line contains $k$ integers $a_1,\ldots, a_k$.
- The fourth line contains $k$ integers $p_1,\ldots,p_k$.

###Output
Output the expected number of ways to form teams, modulo $998244353$.

###Constraints

- $1\le a_i\le 10^9$
- $1\le k\le 2\cdot 10^5$
- $1\le r\le 10^5$
- $1\le p_i<998\ 244\ 353$

###Subtasks

**Subtask 1 (10 points):** $r\le 100$

**Subtask 2 (90 points):** Original constraints.

###Sample Input
```
1
2
2 2
1 1
```

###Sample Output
```
4
```
 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
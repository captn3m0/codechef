---
{"category_name":"school","problem_code":"COVID19","problem_name":"Coronavirus Spread","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n3 6\r\n3\r\n1 3 5\r\n5\r\n1 2 5 6 7","output":"1 1\r\n3 3\r\n2 3","explanation":"**Example case 1:** The distance between the two people is $3$, so the virus cannot spread and at the end, there will always be only one infected person.\r\n\r\n**Example case 2:** The distance between each two adjacent people is $2$, so all of them will eventually get infected.\r\n\r\n**Example case 3:**\r\n- In one of the best possible scenarios, the person at the position $1$ is infected initially and the virus will also infect the person at the position $2$.\r\n- In one of the worst possible scenarios, the person at the position $5$ is infected initially and the virus will also infect the people at the positions $6$ and $7$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/58tnfdWAKys","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"24-03-2020","tags":{"0":"alei","1":"alei","2":"brute","3":"cakewalk","4":"may20","5":"simulation"},"problem_difficulty_level":"Cakewalk","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/COVID19","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COVID19","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/COVID19.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/COVID19.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/COVID19.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/COVID19.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/COVID19.pdf) as well.

There are $N$ people on a street (numbered $1$ through $N$). For simplicity, we'll view them as points on a line. For each valid $i$, the position of the $i$-th person is $X_i$.

It turns out that exactly one of these people is infected with the virus COVID-19, but we do not know which one. The virus will spread from an infected person to a non-infected person whenever the distance between them is at most $2$. If we wait long enough, a specific set of people (depending on the person that was infected initially) will become infected; let's call the size of this set the *final number of infected people*.

Your task is to find the smallest and largest value of the final number of infected people, i.e. this number in the best and in the worst possible scenario.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. 
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-seperated integers $X_1, X_2, \ldots, X_N$.

### Output
For each test case, print a single line containing two space-separated integers ― the minimum and maximum possible final number of infected people.

### Constraints
- $1 \le T \le 2,000$
- $2 \le N \le 8$
- $0 \le X_i \le 10$ for each valid $i$
- $X_1 \lt X_2 \lt \ldots \lt X_N$

### Subtasks
**Subtask #1 (10 points):** $N \le 3$

**Subtask #2 (90 points):** original constraints

### Example Input
```
3
2
3 6
3
1 3 5
5
1 2 5 6 7
```

### Example Output
```
1 1
3 3
2 3
```
	
### Explanation:
**Example case 1:** The distance between the two people is $3$, so the virus cannot spread and at the end, there will always be only one infected person.

**Example case 2:** The distance between each two adjacent people is $2$, so all of them will eventually get infected.

**Example case 3:**
- In one of the best possible scenarios, the person at the position $1$ is infected initially and the virus will also infect the person at the position $2$.
- In one of the worst possible scenarios, the person at the position $5$ is infected initially and the virus will also infect the people at the positions $6$ and $7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
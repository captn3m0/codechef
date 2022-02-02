---
{"category_name":"easy","problem_code":"SLPCYCLE","problem_name":"Sleep Cycle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/EGZa2Zpv8H0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"14-04-2021","tags":{"0":"daanish_adm","1":"greedy","2":"simple","3":"start5","4":"vichitr"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SLPCYCLE","time":{"view_start_date":1624800600,"submit_start_date":1624800600,"visible_start_date":1624800600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SLPCYCLE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START5/mandarin/SLPCYCLE.pdf), [Russian](https://www.codechef.com/download/translated/START5/russian/SLPCYCLE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START5/vietnamese/SLPCYCLE.pdf) as well.

Chef has been studying the human sleep cycle for years. He divides a day into $L$ units of time (numbered $1$ through $L$). Chef's research shows that his body requires spending only $H$ continuous units of time per day on sleep — then, he can stay active during work. However, in case of travel or any other responsibilities, he might not be able to achieve this ideal state.

Next, Chef noticed that if he sleeps for $x$ ($x \lt H$) continuous units of time and then performs some other activity, he can still meet his daily sleep quota, but the remaining time he needs to spend on continuously sleeping becomes $2\cdot(H-x)$. He can further split this sleeping time in the same way, i.e. if he now sleeps for $y$ more ($y \lt 2\cdot(H-x)$) continuous units of time, his required sleeping time becomes $2\cdot(2\cdot(H-x)-y)$, and so on.

You are given a string $S$ with length $L$; for each valid $i$, the $i$-th character of this string is '0' if the $i$-th unit of time is free (so Chef can use it to sleep) or '1' if it is occupied.

Can Chef ever get enough sleep to feel fresh during his work, given that he can choose when to sleep in his free time?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $L$ and $H$.
- The second line contains a single string $S$ with length $L$.

### Output
Print a single line containing the string `"YES"` if Chef can have the required amount of sleep or `"NO"` if he cannot (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq T \leq 10$
- $1 \leq H \leq L \leq 10^5$
- $S$ contains only characters '0' and '1'

### Example Input
```
4
3 1
111
3 1
101
7 5
0000100
6 5
000010
```

### Example Output
```
NO
YES
YES
NO
```
	
### Explanation
**Example case 1:** Chef needs only $1$ unit of sleep, but since he is busy all the time, he cannot sleep at all.

**Example case 2:** Chef needs only $1$ unit of sleep and he has exactly one unit of time when he is free, so he can sleep during that unit of time.

**Example case 3:** Chef needs $5$ continuous units of sleep. First, he spends the first $4$ free units of time, and then he needs $2 \cdot (5 - 4) = 2$ continuous units of sleep, which he has available as the last $2$ free units of time.

**Example case 4:** Chef needs $5$ units of sleep. If he spends the first $4$ units of time, he still needs $2 \cdot (5 - 4) = 2$ continuous units of sleep, but only a single unit of time is left now, so he is unable to get enough sleep.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"school","problem_code":"MODEFREQ","problem_name":"Mode of Frequencies","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n8\r\n5 9 2 9 7 2 5 3\r\n9\r\n5 9 2 9 7 2 5 3 1","output":"2\r\n1","explanation":"- **Test case 1:** $(2$, $9$ and $5)$ have frequency $2$, while $(3$ and $7)$ have frequency $1$. Three numbers have frequency $2$, while $2$ numbers have frequency $1$. Thus, the mode of the frequencies is $2$.\r\n\r\n- **Test case 2:** $(2$, $9$ and $5)$ have frequency $2$, while $(3$, $1$ and $7)$ have frequency $1$. Three numbers have frequency $2$, and $3$ numbers have frequency $1$. Since there are two modal values $1$ and $2$, we report the smaller one: $1$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"29-08-2020","tags":{"0":"ad","1":"akash_adm","2":"akashbhalotia","3":"cakewalk","4":"frequency","5":"ltime87","6":"psychik"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/MODEFREQ","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MODEFREQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/MODEFREQ.pdf) and [Russian](https://www.codechef.com/download/translated/LTIME87/russian/MODEFREQ.pdf).

Chef opted for Bio-Statistics as an Open-Elective course in his university, but soon got bored, and decided to text his friends during lectures. The instructor caught Chef, and decided to punish him, by giving him a special assignment.

There are $N$ numbers in a list $A = A_1, A_2, \ldots, A_N$. Chef needs to find the [mode](https://en.wikipedia.org/wiki/Mode_(statistics)) of the frequencies of the numbers. If there are multiple modal values, report the smallest one. In other words, find the frequency of all the numbers, and then find the frequency which has the highest frequency. If multiple such frequencies exist, report the smallest (non-zero) one.

More formally, for every $v$ such that there exists at least one $i$ such that $A_i = v$, find the number of $j$ such that $A_j = v$, and call that the frequency of $v$, denoted by $freq(v)$. Then find the value $w$ such that $freq(v) = w$ for the most number of $v$s considered in the previous step. If there are multiple values $w$ which satisfy this, output the smallest among them.

As you are one of Chef's friends, help him complete the assignment.

###Input:

- The first line contains an integer $T$, the number of test cases. 
- The first line of each test case contains an integer $N$, the number of values in Chef's assignment.
- The second line of each test case contains $N$ space-separated integers, $A_i$, denoting the values in Chef's assignment. 

###Output:
For each test case, print the mode of the frequencies of the numbers, in a new line. 

###Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10000$
- $1 \le A_i \le 10$

###Subtasks
- 30 points : $1 \leq N \leq 100$
- 70 points : Original constraints.

###Sample Input:
```
2
8
5 9 2 9 7 2 5 3
9
5 9 2 9 7 2 5 3 1
```
###Sample Output:
```
2
1
```
###Explanation:
- **Test case 1:** $(2$, $9$ and $5)$ have frequency $2$, while $(3$ and $7)$ have frequency $1$. Three numbers have frequency $2$, while $2$ numbers have frequency $1$. Thus, the mode of the frequencies is $2$.

- **Test case 2:** $(2$, $9$ and $5)$ have frequency $2$, while $(3$, $1$ and $7)$ have frequency $1$. Three numbers have frequency $2$, and $3$ numbers have frequency $1$. Since there are two modal values $1$ and $2$, we report the smaller one: $1$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
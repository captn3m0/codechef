---
{"category_name":"easy","problem_code":"CHEFQUER","problem_name":"Chef and Queries","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/MAD5Cm0Zceo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"iscsi","date_added":"19-06-2021","tags":{"0":"aryanag_adm","1":"binary","2":"easy","3":"fenwick","4":"segment","5":"start5","6":"vichitr"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/CHEFQUER","time":{"view_start_date":1624800600,"submit_start_date":1624800600,"visible_start_date":1624800600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFQUER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START5/mandarin/CHEFQUER.pdf), [Russian](https://www.codechef.com/download/translated/START5/russian/CHEFQUER.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START5/vietnamese/CHEFQUER.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. Chef wants you to handle $Q$ queries. There are two types of queries:
- `1 L R X`: for each $i$ ($L \le i \le R$), add $(X + i - L)^2$ to $A_i$
- `2 Y`: find the current value of $A_Y$

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $Q$ lines follow. Each of these lines describes a query in the format described above.

### Output
For each query of the second type, print a single line containing one integer $A_Y$.

### Constraints
- $1 \leq N, Q \leq 10^5$
- $0 \leq |A_i| \leq 10^6$ for each valid $i$
- $1 \leq L \leq R \leq N$
- $0 \leq |X| \leq 10^6$
- $1 \le Y \le N$

### Example Input
````
5 4
1 10 3 6 5
1 1 3 5
2 3
1 4 5 7
2 5
````

### Example Output
````
52
69
````

### Explanation
- the sequence after the first query is $[1 + 5^2, 10 + (5 + 2 - 1)^2, 3 + (5 + 3 - 1)^2, 6, 5] = [26,  46, 52, 6, 5]$
- the second query asks for $A_3$, which is $52$
- the sequence after the third query is $[26,  46, 52, 6 + 7^2, 5 + (7+1)^2] = [26,  46, 52, 55, 69]$
- the fourth query asks for $A_5$, which is $69$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
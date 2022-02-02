---
{"category_name":"school","problem_code":"CVDRUN","problem_name":"Covid Run","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6 2 5 3\r\n12 3 4 2","output":"YES\r\nNO","explanation":"- In the **first sample**, Covid starts at city $5$, then goes to city $1$, and then from city $1$ to city $3$. Thus, it reaches the city that you live in.\r\n\r\n- In the **second sample**, Covid starts at city $4$, goes to city $7$, then $10$, $1$, then $4$, $7$, $10$, $\\ldots$, and so on. It never reaches city $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"1-10-2020","tags":{"0":"akash_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CVDRUN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/CVDRUN.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/CVDRUN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/CVDRUN.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/CVDRUN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/CVDRUN.pdf) as well.

**Covid-$19$** is spreading fast! There are $N$ cities, numbered from $0$ to $(N-1)$, arranged in a circular manner. City $0$ is connected to city $1$, $1$ to $2$, $\dots$, city $(N-2)$ to city $(N-1)$, and city $(N-1)$ to city $0$.

The virus is currently at city $X$. Each day, it jumps from its current city, to the city $K$ to its right, i.e., from city $X$ to the city $(X+K)\%N$. As the virus jumps, the cities in between don't get infected. Cities once infected stay infected. You live in city $Y$. **Find if it will reach your city eventually.** If it will, print **YES**, else print **NO**.

###Input:

- The first line of the input consists of an integer $T$, the number of test cases. 
- The first and only line of each test case contains four space-separated integers - $N$, $K$, $X$ and $Y$, denoting the number of cities, the size of jumps, Covid's current city, and the city that you live in, respectively.

###Output:
For each test case, in a new line, print **YES** if Covid shall reach your city after a finite number of days, else print **NO**. 

###Constraints 
- $1 \leq T \leq 100$
- $1 \leq N \leq 1000$
- $0 \le X, Y \le N-1$
- $0 \le K \le 1000$

###Subtasks
- Subtask 1 - 100% - Original constraints

###Sample Input:
```
2
6 2 5 3
12 3 4 2
```

###Sample Output:
```
YES
NO
```

###Explanation:
- In the **first sample**, Covid starts at city $5$, then goes to city $1$, and then from city $1$ to city $3$. Thus, it reaches the city that you live in.

- In the **second sample**, Covid starts at city $4$, goes to city $7$, then $10$, $1$, then $4$, $7$, $10$, $\ldots$, and so on. It never reaches city $2$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
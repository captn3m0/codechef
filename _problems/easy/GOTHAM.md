---
{"category_name":"easy","problem_code":"GOTHAM","problem_name":"C - Mission Gotham","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adikr_singh","problem_tester":"","date_added":"6-04-2021","tags":{"0":"adikr_singh","1":"easy","2":"greedy","3":"multiset","4":"spyb2021"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GOTHAM","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GOTHAM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Gotham city is in danger. All the people from Gotham were airlifted and they are going to be dropped at different districts of a new safe city.

There are $N$ districts located at position $(1, 2, \ldots, N)$ in a straight line in this newly built safe city.
An **array(P)** is given which tells us about the maximum capacity of people that can be accommodated in the districts.

There is a condition that people can move only in the forward direction(i.e from city $i$ to $i+1$ for $1 \leq i \lt N$) to get shelter.
People want to travel as little as possible to get shelter.
The sad part is that in case any person who does not get shelter is going to die.

Initially, all the districts in the new city are empty.

You are asked $Q$ queries.
- Each query consists of two Integers $X$ and $K$, where $K$ denotes the number of people who are going to be dropped at district $X$.
- You are required to print the total sum of distance traveled by the people in the current query(that got shelter or did not die) in a new line.

**Note:- Queries are not independent(they depend on the previous queries).**

###Input

- First Line consists of one Integer $N$, where $N$ is the number of districts.
- Second line consists of $N$ integers of **(array P)** separated by a space.
- Third Line contains an integer $Q$, which denotes the number of queries.
- Next, $Q$ lines consist of two integers $X$ and $K$ separated by space.

###Output

- For each query, you have to print the total sum of distance traveled by the people in the current query(that got shelter or did not die ) in a new line.

### Constraints

- $1 \leq N \leq 10^5$
- $1 \leq Q \leq 10^5$
- $1 \leq X \leq N$
- $1 \leq P[i] \leq 10^9$
- $1 \leq K \leq 10^9$

### Example Input
```
4
5 5 6 1
2
2 11
2 3
```

### Example Output
```
6
2
```

### Explanation

- **Query $1$**: $5$ people will get shelter in city $2$ and the remaining $6$ will get shelter in city $3$. So, the total distance covered in this query is $6$.
- **Query $2$**: Only $1$ person can get shelter in city $4$ and the rest will die. So, the total distance traveled is $2$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"school","problem_code":"CYBV","problem_name":"The Begining Era Of Cyberverse","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackcyborg","problem_tester":"","date_added":"16-12-2020","tags":{"0":"bytr2020","1":"cakewalk","2":"hackcyborg"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CYBV","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CYBV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
2021 was approaching and the world was about to end. So 2 gods Saurabhx and Saurabhy (from Celesta) created the Cyberverse. But this time disappointed with humans both the gods decided not to have humans in this world. So they created a world of cyborgs. A world without humans. Isn’t it interesting? So let us dive into the cyberverse and have a look at their problems.

There are $N$ kid cyborgs with Chief Cyborg '100gods' and he has $K$ weapons with him. He wants to distribute those $K$ weapons among $N$ kid cyborgs. Since all the kid cyborgs are very good friends, so they set a rule among themselves for taking those weapons. The rule states that the difference between kid cyborg having the maximum weapons and the kid cyborg having minimum weapons should be less than or equal to $1$.   
Find the value of the minimum number of weapons a kid cyborg can have when all the $K$ weapons are distributed among them.

### Input:

- The first line contains an integer $T$, denoting the number of test cases.
- Each of the next $T$ lines will contain two space-separated integers denoting $N$ and $K$ respectively.

### Output:

- For each test case ,output a single line containing an integer $X$ denoting the minimum number of weapons a kid cyborg can have in that test case.  

### Constraints:

- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$
- $1 \leq K \leq 10^9$

### Sample Input:

```
1
5 8
```

### Expected Output:

```
1
```

### Explanation

- There are $5$ kids and $8$ weapons.  
- Hence we will distribute the weapons such that $3$ kids have $2$ weapons each and the remaining $2$ kids have $1$ weapon each.  
- Hence the minimum number of weapons a kid cyborg has is $1$. (  That is, $min(1,2)$ = $1$ )  

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
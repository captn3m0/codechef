---
{"category_name":"school","problem_code":"VACCINE3","problem_name":"Vaccine Drive","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 2 2 2 2 2 2 2 2 2 2 2\r\n5 2 2 2 2 2 2 3 2 2 2 2\r\n9 4 2 2 2 2 3 2 2 2 2 2","output":"6 6\r\n6 7\r\n1 1","explanation":"**Test Case $1$:** It takes one day for every age group to get vaccinated.\r\n\r\n**Test Case $2$:** Age groups $10 - 7$ get vaccinated in a total of $4$ days. On the $5$-th day, $2$ out of $3$ people of age group $6$ get vaccinated. On the $6$-th day, the last person of the $6$-th age group and one random person of the $5$-th age group gets vaccinated. So if the person is Chef, the minimum time required for him to get vaccinated will be $6$ days, and if not, Chef will get vaccinated on the $7$-th day.\r\n\r\n**Test Case $3$:** The last $2$ age groups get vaccinated on the same day.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/nkkJeAEu41U","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"11-05-2021","tags":{"0":"cakewalk","1":"cook129","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VACCINE3","time":{"view_start_date":1621794604,"submit_start_date":1621794604,"visible_start_date":1621794604,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VACCINE3","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/VACCINE3.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/VACCINE3.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/VACCINE3.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/VACCINE3.pdf) as well.

Suppose the population is divided into the age groups $[1, 10], [11, 20], [21, 30], \ldots, [91, \infty)$. The age groups are numbered from $1$ to $10$ and there are $X_i$ people in age group $i$.

The COVID vaccine drive has started and people will be vaccinated in the decreasing order of their age groups. Suppose $P$ people are vaccinated per day and if less than $P$ people are left in an age group, then the remaining doses for that day are given to the people of immediate lower age group and the process for that day continues until the vaccines for that day are finished or the entire population has been vaccinated. The selection of a person from a given age group is done randomly.

Given $X$, $P$, and Chef’s age group $G$, tell the minimum and the maximum number of days will it take for Chef to get vaccinated.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, twelve integers $G$, $P$, $X_1, X_2, \ldots, X_{10}$. 

###Output
For each test case, output in a single line two space-separated integers, the minimum and maximum time required for Chef to get vaccinated.

###Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq G \leq 10$
- $1 \leq P, X_i \leq 10^5$

###Sample Input
```
3
5 2 2 2 2 2 2 2 2 2 2 2
5 2 2 2 2 2 2 3 2 2 2 2
9 4 2 2 2 2 3 2 2 2 2 2
```

###Sample Output
```
6 6
6 7
1 1
```
	
###Explanation
**Test Case $1$:** It takes one day for every age group to get vaccinated.

**Test Case $2$:** Age groups $10 - 7$ get vaccinated in a total of $4$ days. On the $5$-th day, $2$ out of $3$ people of age group $6$ get vaccinated. On the $6$-th day, the last person of the $6$-th age group and one random person of the $5$-th age group gets vaccinated. So if the person is Chef, the minimum time required for him to get vaccinated will be $6$ days, and if not, Chef will get vaccinated on the $7$-th day.

**Test Case $3$:** The last $2$ age groups get vaccinated on the same day.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
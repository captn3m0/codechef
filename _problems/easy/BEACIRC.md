---
{"category_name":"easy","problem_code":"BEACIRC","problem_name":"Beautiful Circles","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dj_r_1","problem_tester":"","date_added":"19-06-2020","tags":{"0":"dem2020","1":"dj_r_1","2":"geometry"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BEACIRC","time":{"view_start_date":1597339800,"submit_start_date":1597339800,"visible_start_date":1597339800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BEACIRC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
An un-ordered triplet of circles $(C1, C2, C3)$ is called $\textbf{beautiful}$ if they satisfy the following property:

Two of the circles in the triplet intersect at exactly $2$ points, and the other circle passes through $4$ points: 
- Centres of the two intersecting circles
- Points of intersection of the two circles

You are given N circles. Find the total number of beautiful triplets($C_{i}, C_{j}, C_{k}$). (two triplets are different if atleast one of i, j, k in one triplet is not present in the other triplet).  
Example: $(C_{1}, C_{2}, C_{3})$ is same as $(C_{1}, C_{3}, C_{2})$ but different from $(C_{1}, C_{2}, C_{4})$

### Input Format:

- First line contains a single integer $T$, the number of test cases.
- $T$ testcases follow. 
- The $i^{th}$ test case begins with the integer $N$, number of circles.
- Next $N$ lines each contain three integers $X, Y, R$, where $(X,Y)$ is the coordinate of center and $R$ is the radius of the $i^{th}$ circle.

### Output Format:
For each test case output a single integer in a newline which is the number of beautiful triplets.

### Constraints:
- $1\le T \le 15$
- $3\le N\le 10^3$
- $0\le X, Y \le 10^6$
- $1\le R \le 10^6$

### Sample Input:
```
1  
4  
0 0 8  
0 10 6   
0 5 5   
0 0 8
```

### Sample Output:
```
2
```

### Explanation:
The triplets (C1, C2, C3) and (C4, C2, C3) satisfy the condition.  
In (C1, C2, C3), C3 passes through the center of C1 and C2 and also through the intersection points of C1 and C2.  
Note: Same circles might exist in the input.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
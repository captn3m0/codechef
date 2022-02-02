---
{"languages_supported":{"0":"NA"},"title":"BALANCED","category":"NA","old_version":true,"problem_code":"BALANCED","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Little Jack and little Jill are on a scavenger hunt you have devised. They are going to visit a set of locations and you are going to leave exactly one object at each location. There are precisely two different types of objects, say type A and type B. Futhermore, Jack only likes objects of type A and Jill only likes objects of type B so Jack will never collect a type B object and Jill will never collect a type A object.

</p><p>
Jack and Jill will travel together and visit these locations one at a time. If at any point during their journey one person has many more of their preferred item than the other, then the other will get jealous and they may fight. To help avoid such fights, you want to assign items to locations to minimize the maximum difference between the number if items they hold over the whole journey.

</p><p>
Specifically, if R = (r<sub>1</sub>,r<sub>2</sub>,...,r<sub>n</sub>) is the order the locations will be visited and P is an assignment of an object to each location, then we define d<sub>R</sub>(P,t) to be the difference between the number of objects Jack has and the number of objects Jill has after visiting the first t locations. Finally, let d<sub>R</sub>(P) denote the maximum of d<sub>R</sub>(P,t) over all times t. The goal would be to find an assignment P to minimize d<sub>R</sub>(P).

</p><p>
This sounds like an easy task, but there is one further complication. Both Jack and Jill have decided on an order they want to visit the items. Jack wants to follow order S but Jill wants to follow order T. It looks like they are a long way from resolving this dispute but you need to place the items now! To minimize the effect of the worst-case scenario, you want to place the items in some manner P to minimize the maximum of d<sub>S</sub>(P) and d<sub>T</sub>(P).

<h3>Input</h3>
</p><p>
The first line indicates the number of test cases to follow (at most 30). Each test case consists of three lines. The first contains a single integer n between 1 and 20,000. The next two lines each contain a permutation of the integers from 0 to n-1 where consecutive integers are separated by a space. The first permutation, say S, is the order that Jack wants to visit the locations and the second permutation, say T, is the order that Jill wants to visit the locations.

<h3>Output</h3>
</p><p>
The output for each test case consists of a single line. This line should contain a single string of length n consisting only of uppercase characters 'A' and 'B'. This string describes a placement P of items to locations where the i'th character describes which item is at location i (the indices range from 0 to n-1).

</p><p>
The placement P described by this string should minimize the maximum of d<sub>S</sub>(P) and d<sub>T</sub>(P). If there are many strings describing optimum placements, then output the lexicographically least such string.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 0 2
2 1 0
4
0 2 1 3
1 2 3 0

<b>Output:</b>
ABA
AABB
</pre>

<h3>Explanation of Sample Data</h3>
</p><p>
In the first test case, following the first permutation 1 0 2 results in the sequence of objects being BAA while following the second permutation results in the sequence of objects being ABA. In either case, the maximum difference between the number of As seen and the number of Bs seen over the whole trip is at most 1.

</p><p>
In the second test case, following permutation 0 2 1 3 results in the sequence being ABAB wherease following permutation 1 2 3 0 results in the sequence being ABBA. Again, the maximum difference in either case is at most 1.</p>    
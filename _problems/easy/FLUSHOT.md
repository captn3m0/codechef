---
{"languages_supported":{"0":"NA"},"title":"FLUSHOT","category":"NA","old_version":true,"problem_code":"FLUSHOT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
A new strain of flu has broken out. Fortunately, a vaccine was developed very quickly and is now being administered to the public. Your local health clinic is administering this vaccine, but the waiting line is very long.

</p><p>
For safety reasons, people are not allowed to stand very close to each other as the flu is not under control yet. However, many people were not aware of this precaution. A health and safety official recently examined the line and has determined that people need to spread out more in the line so that they are at least T units away from each other. This needs to be done as quickly as possible so we need to calculate the minimum distance D such that it is possible for every person to move at most D units so the distance between any two people is at least T. Specifically, D should be the minimum value such that there are locations x'<sub>i</sub> so that |x<sub>i</sub> - x'<sub>i</sub>| ≤ D for each person i and |x'<sub>i</sub> - x'<sub>j</sub>| ≥ T for any two distinct people i,j. Furthermore, since nobody can move past the receptionist we must also have that x'<sub>i</sub> ≥ 0. 


</p><p>
The location of each person is given by the number of meters they are standing from the receptionist. When spreading out, people may move either forward or backward in line but nobody may move past the location of the receptionist.

<h3>Input</h3>
</p><p>
The first line of input contains a single integer K ≤ 30 indicating the number of test cases to follow. Each test case begins with a line containing an integer N (the number of people) and a floating point value T (the minimum distance that should be between people). The location of each person i is described by single floating point value x<sub>i</sub> which means person i is x<sub>i</sub> meters from the receptionist. These values appear in non-decreasing order on the following N lines, one value per line.

</p><p>
Bounds: 1 ≤ N ≤ 10,000 and T and every x<sub>i</sub> is between 0 and 1,000,000 and is given with at most 3 decimals of precision.

<h3>Output</h3>
</p><p>
For each test case, you should output the minimum value of D with exactly 4 decimals of precision on a single line.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 4
1
2
2 2
1
2
4 1
0
0.5
0.6
2.75

<b>Output:</b>
2.0000
0.5000
1.4000

</pre>

<h3>Explanation of Sample Data</h3>
</p><p>

In the first test case, the first person can move to location 0 and the second to location 4 with the maximum distance moved being 2. In the second case, person 1 can move to location 0.5 and person 2 can move to location 2.5 for a maximum distance moved being 0.5. Finally, in the last output the first person does not move, the second moves to location 1, the third to location 2, and the fourth to location 3. The maximum distance moved by any person was done by the third person who moved 1.4 meters to their destination.</p>    